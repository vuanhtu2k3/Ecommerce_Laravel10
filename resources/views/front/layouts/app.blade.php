<!DOCTYPE html>
<html class="no-js" lang="en_AU" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Ecomerce website </title>
    <meta name="description" content="" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />

    <meta name="HandheldFriendly" content="True" />
    <meta name="pinterest" content="nopin" />

    <meta property="og:locale" content="en_AU" />
    <meta property="og:type" content="website" />
    <meta property="fb:admins" content="" />
    <meta property="fb:app_id" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="" />
    <meta property="og:image:height" content="" />
    <meta property="og:image:alt" content="" />

    <meta name="twitter:title" content="" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:image:alt" content="" />
    <meta name="twitter:card" content="summary_large_image" />


    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/slick.css ') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/video-js.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/ion.rangeSlider.min.css') }}" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&family=Raleway:ital,wght@0,400;0,600;0,800;1,200&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@300;400;700;900&display=swap"
        rel="stylesheet">

    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="#" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body data-instant-intensity="mousedown">

    <div class="bg-light top-header">
        <div class="container">
            <div class="row align-items-center py-3 d-none d-lg-flex justify-content-between">
                <div class="col-lg-4 logo">
                    <a href="{{ route('front.home') }}" class="text-decoration-none">
                        <img src="{{ asset('uploads/logo/logo.png') }}" class="logo-img" alt="Logo">
                    </a>
                    <style>
                        .logo-img {
                            max-width: 130px;
                            max-height: 80px;
                        }
                    </style>
                </div>
                <div class="col-lg-6 col-6 text-left  d-flex justify-content-end align-items-center">

                    @if (Auth::check())
                        <a href="{{ route('account.profile') }}" class="nav-link text-dark">{{ __('My Account') }}</a>
                    @else
                        <a href="{{ route('account.login') }}" class="nav-link text-dark">{{ __('LOGIN') }}</a>
                    @endif
                    <form action="{{ route('front.shop') }}" method="get">
                        <div class="input-group">
                            <input value="{{ Request::get('search') }}" type="text" placeholder="Search "
                                class="form-control" name="search" id="search">
                            <button type="submit" class="input-group-text">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        #navbar {
            display: flex;
            justify-content: space-between;
            /* Căn đều các phần tử giữa navbar */
        }

        .navbar-collapse {
            display: flex;
            justify-content: flex-end;
            /* Căn tất cả các phần tử trong navbar về bên phải */
            align-items: center;
            /* Căn giữa theo chiều dọc */
        }
    </style>
    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-xl" id="navbar">
                <a href="index.php" class="text-decoration-none mobile-logo">
                    <img src="{{ asset('uploads/logo/logo.png') }}" width="50px">
                </a>

                <button class="navbar-toggler menu-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="navbar-toggler-icon fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <!-- justify-content-end để căn phải -->
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase"
                                href="{{ route('front.home') }}">{{ __('HOME') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase"
                                href="{{ route('front.shop') }}">{{ __('SHOP') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-uppercase" id="staticPagesDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('PAGES') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="staticPagesDropdown">
                                @if (staticPages()->isNotEmpty())
                                    @foreach (staticPages() as $page)
                                        <li><a class="dropdown-item" href="{{ route('front.page', $page->slug) }}"
                                                title="{{ $page->name }}">{{ $page->name }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                    </ul>


                    <div class="language-switcher">
                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                @if (app()->getLocale() == 'en')
                                                    <span class="text-uppercase" id="selected-language">English</span>
                                                @else
                                                    <span class="text-uppercase" id="selected-language">Tiếng
                                                        Việt</span>
                                                @endif
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('front.language', ['en']) }}">
                                                        English
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('front.language', ['vi']) }}">
                                                        Tiếng Việt
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="nav-item ms-3"> <!-- Thêm ms-3 cho khoảng cách -->
                        <a href="{{ route('front.cart') }}" class="d-flex pt-2">
                            <i class="fas fa-shopping-cart text-primary"></i>
                        </a>
                    </div>



                </div>
            </nav>



        </div>
    </header>

    <main>
        @yield('content')
    </main>
    <footer class="bg-dark mt-5">
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-card">
                        <h3>{{ __('Contact US') }}</h3>

                        Phú Diễn, Bắc Từ Liêm, Hà Nội <br>
                        tuvux14@example.com <br>
                        0369944555</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card">
                        <h3>{{ __('Important Links') }}</h3>
                        <ul>
                            @if (staticPages()->isNotEmpty())
                                @foreach (staticPages() as $page)
                                    <li> <a href="{{ route('front.page', $page->slug) }}"
                                            title="{{ $page->name }}">{{ $page->name }}</a></li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card">
                        <h3>{{ __('My Account') }}</h3>
                        <ul>
                            <li><a href="#" title="Sell">{{ __('LOGIN') }}</a></li>
                            <li><a href="#" title="Advertise">{{ __('REGISTER') }}</a></li>
                            <li><a href="#" title="Contact Us">{{ __('My Orders') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="copy-right text-center">
                            <p>© Copyright 2022 Amazing Shop. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Wish List model-->
    <div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('front-assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/instantpages.5.1.0.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/lazyload.17.6.0.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/custom.js') }}"></script>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });

        function addToCart(id) {
            $.ajax({
                url: '{{ route('front.addToCart') }}',
                type: 'post',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == true) {
                        window.location.href = "{{ route('front.cart') }}";
                    } else {
                        alert(response.message);
                    }
                }
            });
        }

        function addToWishList(id) {
            $.ajax({
                url: '{{ route('front.addToWishlist') }}',
                type: 'post',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == true) {
                        $("#wishlistModal .modal-body").html(response.message);
                        $("#wishlistModal").modal('show');
                    } else {
                        window.location.href = "{{ route('account.login') }}";

                    }
                }
            });
        }
    </script>
    @yield('customJs')
</body>

</html>
