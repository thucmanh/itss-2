<!doctype html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>レシピ共有</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/user/img/favicon.ico') }}">
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('/profile/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('/profile/css/fonts.googleapis.com.css') }}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('/profile/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="{{ asset('/profile/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/ace-rtl.min.css') }}" />
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('/profile/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/jquery.gritter.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/bootstrap-editable.min.css') }}" />
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/style.css') }}">

    <script src="{{ asset('/user/js/jquery.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Alert for confirm password -->
    <script>
        var msg = '{{Session::get("alert")}}';
        var exist = '{{Session::has("alert")}}';
        if (exist) {
            alert(msg);
        }
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- User-profile CSS here -->
    <link rel="stylesheet" href="{{ asset('/user/css/user-profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('/user/css/custom.css') }}">
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('/user/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ URL::to('/') }}"><img src="{{ asset('/user/img/logo/logo.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="blog_right_sidebar col-xl-4 col-lg-4" style="margin-top:20px">
                                        <aside class="single_sidebar_widget search_widget" style="margin:0;padding:0">
                                            <form action="{{ route('search.result') }}">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="query" class="form-control"
                                                            placeholder='探索。。。' onfocus="this.placeholder = ''"
                                                            onblur="this.placeholder = '探索。。。'">
                                                        <div class="input-group-append">
                                                            <button class="btns" type="submit"><i
                                                                    class="ti-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </aside>
                                    </div>
                                    <div class="main-menu d-none d-lg-block col-m-8 col-m-12">
                                        <nav>
                                            <ul id="navigation" class="d-flex justify-content-end align-items-center">
                                                @if(Auth::user())
                                                <li><a>投稿</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ URL::to('/my-posts') }}">私の投稿</a></li>
                                                        <li><a href="{{ URL::to('/create_post') }}">投稿を作成する</a></li>
                                                        <li><a href="{{ URL::to('/top-posts') }}">投稿ランク</a></li>
                                                    </ul>
                                                </li>
                                                <li><a id="cartnum" href="{{ route('cart') }}">カート
                                                        ({{count(Auth::user()->carts()->get()) ?? 0}})</a></li>
                                                @endif
                                                <!-- <li><a href="{{ URL::to('create_post') }}">Create</a></li> -->
                                                <li><a href="#">タグ</a>
                                                    <ul class="submenu">
                                                        @foreach ($tags as $tag)
                                                        <li><a href="{{ URL::to('/posts/tag/' . $tag->tag_id) }}">{{
                                                                $tag->tag_title }}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li><a href="{{ URL::to('/product') }}">材料</a>
                                                </li>

                                                @if (!session('status') && auth()->user())
                                                <li><a>アカウント</a>
                                                    <ul class="submenu">
                                                        @if(Auth::user()->admin)
                                                        <li><a href="{{ URL::to('admin/home-page') }}">管理者</a></li>
                                                        @endif
                                                        <li><a
                                                                href="{{ URL::to('users/' . Auth::user()->user_id) }}">プロフィールを見る</a>
                                                        </li>
                                                        <li><a href="{{ URL::to('/logout') }}">ログアウト</a></li>
                                                    </ul>
                                                </li>
                                                @else
                                                <li class="button-header margin-left "><a
                                                        href="{{ URL::to('/register') }}" class="btn">サインアップ</a></li>
                                                <li class="button-header"><a href="{{ URL::to('/login') }}"
                                                        class="btn btn3">ログイン</a></li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-wrappper footer-bg">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-3">
                                        <a href="index.html"><img src="{{ asset('/user/img/logo/logo2_footer.png') }}"
                                                alt=""></a>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mt-5">
                                <div class="footer-tittle">
                                    <h4>連絡先 </h4>
                                    <ul>
                                        <li><a href="#">HEDSPI-D9, Hanoi University of Science and Technology</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- JS here -->
    <script src="{{ asset('/user/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('/user/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/user/js/popper.min.js') }}"></script>
    <script src="{{ asset('/user/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('/user/js/jquery.slicknav.min.js') }}"></script>
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('/user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/user/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('/user/js/wow.min.js') }}"></script>
    <script src="{{ asset('/user/js/animated.headline.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.magnific-popup.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('/user/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('/user/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('/user/js/jquery.barfiller.js') }}"></script>
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('/user/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/user/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('/user/js/hover-direction-snake.min.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('/user/js/contact.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.form.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/user/js/mail-script.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('/user/js/plugins.js') }}"></script>
    <script src="{{ asset('/user/js/main.js') }}"></script>
</body>
</html>
