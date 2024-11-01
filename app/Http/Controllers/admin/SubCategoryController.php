<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function index(Request $request)
    {
        $subCategories = SubCategory::select('sub_categories.*', 'categories.name as categoryName')
            ->latest('sub_categories.id')
            ->leftJoin(
                'categories',
                'categories.id',
                'sub_categories.category_id'
            );

        if (!empty($request->get('keyword'))) {
            $subCategories = $subCategories->where('sub_categories.name', 'like', '%' . $request->get('keyword') . '%');
            $subCategories = $subCategories->orWhere('categories.name', 'like', '%' . $request->get('keyword') . '%');
        }
        $subCategories = $subCategories->paginate(10);


        return view('admin.sub_category.list', compact('subCategories'));
    }
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $data['categories'] = $categories;
        return view('admin.sub_category.create', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required|unique:sub_categories',
            'category' => 'required',
            'status' => 'required'
        ]);
        if ($validator->passes()) {
            $subCategory = new SubCategory();
            $subCategory->name = $request->name;
            $subCategory->slug = $request->slug;
            $subCategory->showHome = $request->showHome;
            $subCategory->status = $request->status;
            $subCategory->category_id = $request->category;
            $subCategory->save();

            Session::flash('success', 'Sub Category create successfully!');
            return response([
                'status' => true,
                'message' => 'Sub category create successfully'
            ]);
        } else {
            return response([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }
    public function edit($id, Request $request)
    {

        $subCategory = SubCategory::find($id);
        if (empty($subCategory)) {
            Session::flash('error', 'Record not found');
            return redirect()->route('sub-categories.index');
        }
        $categories = Category::orderBy('name', 'ASC')->get();
        $data['categories'] = $categories;
        $data['subCategory'] = $subCategory;
        return view('admin.sub_category.edit', $data);
    }

    public function update($id, Request $request)
    {
        $subCategory = SubCategory::find($id);

        if (empty($subCategory)) {
            Session::flash('error', 'Record not found');
            return response([
                'status' => false,
                'notFound' => true

            ]);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required|unique:sub_categories,slug,' . $subCategory->id . ',id',
            'category' => 'required',
            'status' => 'required'
        ]);
        if ($validator->passes()) {
            $subCategory->name = $request->name;
            $subCategory->slug = $request->slug;
            $subCategory->showHome = $request->showHome;
            $subCategory->status = $request->status;
            $subCategory->category_id = $request->category;
            $subCategory->save();

            Session::flash('success', 'Sub Category update successfully!');
            return response([
                'status' => true,
                'message' => 'Sub category update successfully'
            ]);
        } else {
            return response([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }
    public function destroy($id, Request $request)
    {
        $subCategory = SubCategory::find($id);

        if (empty($subCategory)) {
            Session::flash('error', 'Record not found');
            return response([
                'status' => false,
                'notFound' => true

            ]);
        }
        $subCategory->delete();
        return response([
            'status' => true,
            'message' => 'Sub category delete successfully'
        ]);
    }
}
