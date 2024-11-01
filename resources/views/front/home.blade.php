@extends('front.layouts.app')

@section('content')
    <section class="section-1">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img src="images/carousel-1.jpg" class="d-block w-100" alt=""> -->

                    <picture>
                        {{-- <source media="(max-width: 799px)" srcset="{{ asset('front-assets/images/carousel-1-m.jpg') }}" />
                        <source media="(min-width: 800px)" srcset="{{ asset('front-assets/images/carousel-1-m.jpg') }}" /> --}}
                        <img src="{{ asset('front-assets/images/logodt.jpg') }}" alt="" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">{{ __('AnhTu Store') }}</h1>
                            {{-- <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo
                                stet amet amet ndiam elitr ipsum diam</p> --}}
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">{{ __('Shop Now') }}</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">

                    <picture>
                        {{-- <source media="(max-width: 799px)" srcset="{{ asset('front-assets/images/carousel-2-m.jpg') }}" />
                        <source media="(min-width: 800px)" srcset="{{ asset('front-assets/images/carousel-2-m.jpg') }}" /> --}}
                        <img src="{{ asset('front-assets/images/logo1.jpg') }}" alt="" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">{{ __('AnhTu Store') }}</h1>
                            {{-- <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo
                                stet amet amet ndiam elitr ipsum diam</p> --}}
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">{{ __('Shop Now') }}</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img src="images/carousel-3.jpg" class="d-block w-100" alt=""> -->

                    <picture>
                        {{-- <source media="(max-width: 799px)" srcset="{{ asset('front-assets/images/carousel-3-m.jpg') }}" />
                        <source media="(min-width: 800px)" srcset="{{ asset('front-assets/images/carousel-3-m.jpg') }}" /> --}}
                        <img src="{{ asset('front-assets/images/logo2.jpg') }}" alt="" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">{{ __('AnhTu Store') }}
                            </h1>
                            {{-- <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo
                                stet amet amet ndiam elitr ipsum diam</p> --}}
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">{{ __('Shop Now') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-check text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">{{ __('Quality Product') }}</h5>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-shipping-fast text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">{{ __('Free Shipping') }}</h2>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-exchange-alt text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">{{ __('14-Day Return') }}</h2>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-phone-volume text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">{{ __('24/7 Support') }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('CATEGORIES') }}</h2>
            </div>
            <div class="row pb-3">
                @if (getCategories()->isNotEmpty())
                    @foreach (getCategories() as $category)
                        <div class="col-lg-3">
                            <div class="cat-card">
                                <div class="left">
                                    @if ($category->image != '')
                                        <img src="{{ asset('uploads/category/thumb/' . $category->image) }}" alt=""
                                            class="img-fluid">
                                    @endif
                                    {{-- <img src="images/cat-1.jpg" alt="" class="img-fluid"> --}}
                                </div>
                                <div class="right">
                                    <div class="cat-data">
                                        <h2>{{ $category->name }}</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section id="shop" class="w-200">
        <div class="row p-0 m-0">
            <div class="one col-lg-4 col-md-6 col-sm-12 p-0">
                <img class="img-fluid" src="/uploads/banner/banner2.jpg">
                <div class="details">
                    <h2>{{ __('Phone Store') }}</h2>
                    <button class="text-uppercase rounded-2">{{ __('Shop Now') }}</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-6 col-sm-12 p-0">
                <img class="img-fluid" src="/uploads/banner/banner3.jpg">
                <div class="details">
                    <h2>{{ __('Phone Store') }}</h2>
                    <button class="text-uppercase rounded-2">{{ __('Shop Now') }}</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-6 col-sm-12 p-0">
                <img class="img-fluid" src="/uploads/banner/banner4.png">
                <div class="details">
                    <h2>{{ __('Phone Store') }}</h2>
                    <button class="text-uppercase rounded-2">{{ __('Shop Now') }}</button>
                </div>
            </div>
        </div>
    </section>
    <style>
        #shop .one img {
            width: 100%;
            height: 300px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        #shop .one {
            position: relative;
        }

        #shop .one .details {
            top: 0;
            left: 0;
            transition: 0.4s ease;
            color: #FFFFFF;
            font-weight: bold;
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0.7;
            background: #000000;
        }

        #shop .one .details:hover {
            background-color: cornsilk;
        }

        #shop :nth-child(1) .details {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;

        }

        #shop :nth-child(1) .details button {
            padding: 8px;
            margin-top: 10px;
            font-weight: bold;
        }

        #shop :nth-child(1) .details button:hover {
            background-color: chocolate;
        }

        #shop :nth-child(1) .img-fluid:hover {
            background-color: cornsilk;
        }

        #banner {
            background: url(/uploads/banner/bg.jpg);
            width: 100%;
            height: 300px;
            background-position-x: center;
            background-position-y: 80px;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        #banner h1 {
            color: coral;
        }

        #banner button {
            background-color: coral;
            color: white;
        }

        #banner button:hover {
            background-color: #fff;
            color: black;
        }
    </style>
    <section class="section-4 pt-5">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('Featured Products') }}</h2>
            </div>
            <div class="row pb-3">
                @if ($featuredProducts->isNotEmpty())
                    @foreach ($featuredProducts as $product)
                        @php
                            $productImage = $product->product_images->first();
                        @endphp
                        <div class="col-md-3">
                            <div class="card product-card">
                                <div class="product-image position-relative">
                                    <a href="{{ route('front.product', $product->slug) }}" class="product-img">
                                        @if (!empty($productImage->image))
                                            <img class="card-img-top"
                                                src="{{ asset('uploads/product/small/' . $productImage->image) }}" />
                                        @else
                                            <img class="card-img-top"
                                                src="{{ asset('admin-assets/img/default-150x150.png') }}" />
                                        @endif
                                    </a>
                                    <a onclick="addToWishList({{ $product->id }})" class="whishlist"
                                        href="javascript:void(0);"><i class="far fa-heart"></i></a>

                                    <div class="product-action">
                                        @if ($product->track_qty == 'Yes')
                                            @if ($product->qty > 0)
                                                <a class="btn btn-dark" href="javascript:void(0);"
                                                    onclick="addToCart({{ $product->id }});">
                                                    <i class="fa fa-shopping-cart"></i>{{ __('Add To Cart') }}
                                                </a>
                                            @else
                                                <a class="btn btn-dark" href="javascript:void(0);">
                                                    {{ __(' Out Of Stock') }}
                                                </a>
                                            @endif
                                        @else
                                            <a class="btn btn-dark" href="javascript:void(0);"
                                                onclick="addToCart({{ $product->id }});">
                                                <i class="fa fa-shopping-cart"></i> {{ __('Add To Cart') }}
                                            </a>
                                        @endif

                                    </div>
                                </div>
                                <div class="card-body text-center mt-3">
                                    <a class="h6 link" href="product.php">{{ $product->title }}</a>
                                    <div class="price mt-2">
                                        <span class="h5"><strong>{{ number_format($product->price, 3, '.', '.') }}
                                                VND</strong></span>
                                        @if ($product->compare_price > 0)
                                            <span class="h6 text-underline"><del>{{ number_format($product->compare_price, 3, '.', '.') }}
                                                    VND</del></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
        </div>
    </section>
    <!--Mid Banner-->
    <section id="banner" class="my-5">
        <div class="container">
            <h4>MID SEASON's SALE</h4>
            <h1>AUTUMN COLLECTION <br> UP TO 45% OFF</h1>
            <button class="  p-2 rounded-2 "> SHOP NOW</button>
        </div>
    </section>
    <section class="section-4 pt-5">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('Latest Produsts') }}</h2>
            </div>
            <div class="row pb-3">
                @if ($latestProducts->isNotEmpty())
                    @foreach ($latestProducts as $product)
                        @php
                            $productImage = $product->product_images->first();
                        @endphp
                        <div class="col-md-3">
                            <div class="card product-card">
                                <div class="product-image position-relative">
                                    <a href="{{ route('front.product', $product->slug) }}" class="product-img">
                                        {{-- <img class="card-img-top"
                                    src="{{ asset('front-assets/images/product-1.jpg') }}"
                                    alt=""> --}}
                                        @if (!empty($productImage->image))
                                            <img class="card-img-top"
                                                src="{{ asset('uploads/product/small/' . $productImage->image) }}" />
                                        @else
                                            <img class="card-img-top"
                                                src="{{ asset('admin-assets/img/default-150x150.png') }}" />
                                        @endif
                                    </a>
                                    <a onclick="addToWishList({{ $product->id }})" class="whishlist"
                                        href="javascript:void(0);"><i class="far fa-heart"></i></a>

                                    <div class="product-action">
                                        @if ($product->track_qty == 'Yes')
                                            @if ($product->qty > 0)
                                                <a class="btn btn-dark" href="javascript:void(0);"
                                                    onclick="addToCart({{ $product->id }});">
                                                    <i class="fa fa-shopping-cart"></i>{{ __('Add To Cart') }}
                                                </a>
                                            @else
                                                <a class="btn btn-dark" href="javascript:void(0);">
                                                    {{ __(' Out Of Stock') }}
                                                </a>
                                            @endif
                                        @else
                                            <a class="btn btn-dark" href="javascript:void(0);"
                                                onclick="addToCart({{ $product->id }});">
                                                <i class="fa fa-shopping-cart"></i> {{ __('Add To Cart') }}
                                            </a>
                                        @endif

                                    </div>
                                </div>

                                <div class="card-body text-center mt-3">
                                    <a class="h6 link" href="product.php">{{ $product->title }}</a>
                                    <div class="price mt-2">
                                        <span class="h5"><strong>{{ number_format($product->price, 3, '.', '.') }}
                                                VND</strong></span>
                                        @if ($product->compare_price > 0)
                                            <span class="h6 text-underline"><del>{{ number_format($product->compare_price, 3, '.', '.') }}
                                                    VND</del></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
        </div>
    </section>

@endsection
