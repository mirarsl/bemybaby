<!DOCTYPE html>
<html lang="{{app()->currentLocale()}}">
<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-control" content="public">
    
    <link rel="canonical" href="{{ url()->full() }}" />
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    
    
    <link rel="icon" href="/assets/favicon.png" type="image/x-icon"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/animate.min.css" />
    <link rel="stylesheet" href="/assets/css/custom-animate.css" />
    <link rel="stylesheet" href="/assets/css/swiper.min.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome-all.css" />
    <link rel="stylesheet" href="/assets/css/jarallax.css" />
    <link rel="stylesheet" href="/assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/css/odometer.min.css" />
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/css/nice-select.css" />
    <link rel="stylesheet" href="/assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/css/aos.css" />
    <link rel="stylesheet" href="/assets/css/timePicker.css" />
    
    
    <link rel="stylesheet" href="/assets/css/module-css/footer.css" />

    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    
    @stack('links')
    {!! setting('site.header_libs') !!}
    @stack('styles')
</head>
<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>

    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__wrapper">
                <nav class="main-menu">
                    <div class="main-menu__wrapper">
                        <div class="container">
                            <div class="main-menu__wrapper-inner">
                                <div class="main-menu__left">
                                    <div class="main-menu__logo">
                                        <a href="{{route('home')}}"><img src="/assets/logo.png" alt="{{setting('site.title')}}"></a>
                                    </div>
                                </div>
                                <div class="main-menu__main-menu-box">
                                    {{menu('Header','menus.header')}}
                                </div>
                                <div class="main-menu__right">
                                    <div class="main-menu__thm-btn">
                                        <a href="tel:{{$sharedContent['Contact']->phone1}}" class="thm-btn">Mağaza <span class="fas fa-cart-plus"></span> </a>
                                    </div>
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        @yield('content')


        <footer class="site-footer">
            <div class="site-footer__bg-shape" style="background-image: url(assets/images/shapes/site-footer-bg-shape.png);"></div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__contact-info">
                                    <h2 class="footer-widget__title">İletişim Bilgileri</h2>
                                    <ul class="footer-widget__contact-list list-unstyled">
                                        <li>
                                            <div class="footer-widget__contact-icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="footer-widget__contact-content">
                                                <span>Adres</span>
                                                <p class="footer-widget__contact-text">{{$sharedContent['Contact']->getTranslatedAttribute('address1')}}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-widget__contact-icon">
                                                <span class="icon-call"></span>
                                            </div>
                                            <div class="footer-widget__contact-content">
                                                <span>Telefon</span>
                                                <p class="footer-widget__contact-text"><a href="tel:{{$sharedContent['Contact']->getTranslatedAttribute('phone1')}}">{{$sharedContent['Contact']->getTranslatedAttribute('phone1')}}</a></p>
                                                @if($sharedContent['Contact']->getTranslatedAttribute('phone2'))
                                                <p class="footer-widget__contact-text"><a href="tel:{{$sharedContent['Contact']->getTranslatedAttribute('phone2')}}">{{$sharedContent['Contact']->getTranslatedAttribute('phone2')}}</a></p>
                                                @endif
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-widget__contact-icon">
                                                <span class="icon-envolope"></span>
                                            </div>
                                            <div class="footer-widget__contact-content">
                                                <span>E-Posta</span>
                                                <p class="footer-widget__contact-text"><a
                                                        href="mailto:{{$sharedContent['Contact']->getTranslatedAttribute('email1')}}">{{$sharedContent['Contact']->getTranslatedAttribute('email1')}}</a></p>
                                                @if($sharedContent['Contact']->getTranslatedAttribute('email2'))
                                                <p class="footer-widget__contact-text"><a
                                                        href="mailto:{{$sharedContent['Contact']->getTranslatedAttribute('email2')}}">{{$sharedContent['Contact']->getTranslatedAttribute('email2')}}</a></p>
                                                @endif
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{menu('Footer','menus.footer')}}
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__social-media">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Sosyal Medya</h3>
                                    </div>
                                    <ul class="footer-widget__services-link-list list-unstyled">
                                        @if($sharedContent['Social']->facebook)
                                        <li>
                                            <a href="{{$sharedContent['Social']->facebook}}"><i class="fab fa-facebook-f"></i> Facebook</a>
                                        </li>
                                        @endif
                                        @if($sharedContent['Social']->instagram)
                                        <li>
                                            <a href="{{$sharedContent['Social']->instagram}}"><i class="fab fa-instagram"></i> Instagram</a>
                                        </li>
                                        @endif
                                        @if($sharedContent['Social']->twitter)
                                        <li>
                                            <a href="{{$sharedContent['Social']->twitter}}"><i class="fab fa-x-twitter"></i> Twitter</a>
                                        </li>
                                        @endif
                                        @if($sharedContent['Social']->linkedin)
                                        <li>
                                            <a href="{{$sharedContent['Social']->linkedin}}"><i class="fab fa-linkedin-in"></i> Linkedin</a>
                                        </li>
                                        @endif
                                        @if($sharedContent['Social']->youtube)
                                        <li>
                                            <a href="{{$sharedContent['Social']->youtube}}"><i class="fab fa-youtube"></i> Youtube</a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__copyright">
                                    <p class="site-footer__copyright-text">Tüm hakları saklıdır. © {{date('Y')}} </p>
                                    <p class="small">Made with <i style="color: #f2693e" class="fas fa-heart"></i> by <a style="color: #f2693e" href="https://bario.com.tr" rel="dofollow" target="_blank">Bario.</a></p>
                                </div>
                                <div class="site-footer__bottom-menu-box">
                                    <ul class="list-unstyled site-footer__bottom-menu">
                                        {{menu('Footer Alt Bar','menus.footer-alt')}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{route('home')}}" aria-label="logo image">
                    <img src="/assets/logo.png" width="135" alt="{{setting('site.title')}}" />
                </a>
            </div>
            <div class="mobile-nav__container"></div>

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:{{$sharedContent['Contact']->getTranslatedAttribute('email1')}}">{{$sharedContent['Contact']->getTranslatedAttribute('email1')}}</a>
                    @if ($sharedContent['Contact']->getTranslatedAttribute('email2'))
                    <a href="mailto:{{$sharedContent['Contact']->getTranslatedAttribute('email2')}}">{{$sharedContent['Contact']->getTranslatedAttribute('email2')}}</a>
                    @endif
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:{{$sharedContent['Contact']->getTranslatedAttribute('phone1')}}">{{$sharedContent['Contact']->getTranslatedAttribute('phone1')}}</a>
                    @if ($sharedContent['Contact']->getTranslatedAttribute('phone2'))
                    <a href="tel:{{$sharedContent['Contact']->getTranslatedAttribute('phone2')}}">{{$sharedContent['Contact']->getTranslatedAttribute('phone2')}}</a>
                    @endif
                </li>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    @if ($sharedContent['Social']->twitter)
                    <a href="{{$sharedContent['Social']->twitter}}"><i class="fab fa-x-twitter"></i></a>
                    @endif
                    @if ($sharedContent['Social']->facebook)
                    <a href="{{$sharedContent['Social']->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if ($sharedContent['Social']->instagram)
                    <a href="{{$sharedContent['Social']->instagram}}"><i class="fab fa-instagram"></i></a>
                    @endif
                    @if ($sharedContent['Social']->linkedin)
                    <a href="{{$sharedContent['Social']->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                    @endif
                    @if ($sharedContent['Social']->youtube)
                    <a href="{{$sharedContent['Social']->youtube}}"><i class="fab fa-youtube"></i></a>
                    @endif
                </div>
            </div>



        </div>
    </div>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Yukarı Kaydır</span>
    </a>


    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jarallax.min.js"></script>
    <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/js/jquery.appear.min.js"></script>
    <script src="/assets/js/swiper.min.js"></script>
    <script src="/assets/js/jquery.circle-progress.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/wNumb.min.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets/js/jquery-sidebar-content.js"></script>
    <script src="/assets/js/gsap/gsap.js"></script>
    <script src="/assets/js/gsap/ScrollTrigger.js"></script>
    <script src="/assets/js/gsap/SplitText.js"></script>
    <script src="/assets/js/aos.js"></script>
    <script src="/assets/js/timePicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/svg-injector/1.1.3/svg-injector.min.js" integrity="sha512-LpKoEmPyokcDYSjRJ/7WgybgdAYFsKtCrGC9m+VBwcefe1vHXyUnD9fTQb3nXVJda6ny1J84UR+iBtEYm3OQmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var mySVGsToInject = document.querySelectorAll('img.inject-me');
        SVGInjector(mySVGsToInject);
    </script>
    @stack('scripts')

    <script src="/assets/js/script.js"></script>
</body>
</html>