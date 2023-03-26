<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="apple-touch-icon" sizes="180x180" ref="{{asset('assets/vendors/favicon/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/vendors/favicon/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/vendors/favicon/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('assets/vendors/favicon/site.webmanifest')}}"/>
    <link rel="mask-icon" href="{{asset('assets/vendors/favicon/safari-pinned-tab.svg')}}" color="#0094d0" />
    <meta name="apple-mobile-web-app-title" content="Ite.az"/>
    <meta name="application-name" content="Ite.az"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="theme-color" content="#ffffff"/>

    <title>Title</title>
    <meta name="title" content="Ite.az" />
    <meta name="description" content="Ite description" />
    <meta name="image" content="{{asset('assets/images/logo_meta.svg')}}" />
    <meta name="og:title" content="Ite.az" />
    <meta name="og:description" content="Ite description" />
    <meta name="og:image" content="{{asset('assets/images/logo_meta.svg')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/fonts/ite-icons/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
</head>

<body class="">
<!-- HEADERS START -->
<!-- TOP HEADERS START -->
<div class="sections section-topHeader">
    <div class="container-lg">
        <div class="section-topHeader-menu">
            <div class="section-topHeader-menu-item dropdown dropdown--simpleMenu dropdown--withOutArrow">
                <a href="#" class="section-topHeader-menu-item--link button button--extraSmall button--link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Check Certification
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <div class="widget-certification">
                        <div class="widget-certification-head">
                            <h4 class="widget-certification-head--header">
                                Check Certification
                            </h4>
                        </div>
                        <div class="widget-certification-content">
                            <input class="input widget-certification-content--input" name="certification" id="certification" placeholder="#746589" />
                            <button class="button button--dark button--small widget-certification-content--button">Check</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-topHeader-menu-item dropdown dropdown--simpleMenu dropdown--withOutArrow">
                <a href="#" class="section-topHeader-menu-item--link button button--extraSmall button--link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sign In
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <div class="widget-account">
                        <div class="widget-account-item">
                            <a href="account_courses.html" class="widget-account-item--link">
                                My Courses
                            </a>
                        </div>
                        <div class="widget-account-item">
                            <a href="account_settings.html" class="widget-account-item--link">
                                Settings
                            </a>
                        </div>
                        <div class="widget-account-item">
                            <a href="#" class="widget-account-item--link">
                                Log out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TOP HEADERS END -->

<!-- MAIN HEADERS START -->
<div class="sections section-mainHeader">
    <div class="section-mainHeader--block">
        <div class="container-lg section-mainHeader--container">
            <div class="section-mainHeader-startBar">
                <div class="section-mainHeader-startBar-toggle">
                        <span>
                            <i class="ite-icons ite-bars"></i>
                        </span>
                </div>
                <a href="{{route('dashboard')}}" class="section-mainHeader-startBar-logo">
                    <i class="ite-icons ite-logo-withText"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span></i>
                </a>
                <div class="section-mainHeader-startBar-menu">
                    <div class="section-mainHeader-startBar-menu-item">
                        <a href="#" class="section-mainHeader-endBar-menu-item--link button button--link widget-search--toggle">
                            <i class="ite-icons ite-search"></i>
                            <span class="visually-hidden">Search</span>
                        </a>
                    </div>
                    <div class="section-mainHeader-startBar-menu-item dropdown dropdown--simpleMenu dropdown--withOutArrow">
                        <a href="#" class="section-mainHeader-endBar-menu-item--link button button--big button--link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ite-icons ite-basket-outline"></i>
                            <span class="visually-hidden">Basket</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="widget-shopping-cart">
                                <div class="widget-shopping-cart-items">
                                    <a href="#" class="widget-shopping-cart-item">
                                        <div class="widget-shopping-cart-item-image">
                                            <img src="{{asset('assets/images/shopping-cart.png')}}" class="widget-shopping-cart-item-image--img" alt="Microsoftun Yenilikçi Müəllim (MİE) proqramına hazırlıq" />
                                        </div>
                                        <div class="widget-shopping-cart-item-content">
                                            <h4 class="widget-shopping-cart-item-content--header">
                                                Microsoftun Yenilikçi Müəllim (MİE) proqramına hazırlıq
                                            </h4>
                                            <p class="widget-shopping-cart-item-content--date">
                                                14 November-18 November
                                            </p>
                                            <span class="widget-shopping-cart-item-content--price">
                                            56 AZN
                                        </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="widget-shopping-cart-footer">
                                    <div class="widget-shopping-cart-footer-head">
                                        <div class="widget-shopping-cart-footer-head--header">
                                            Total:
                                        </div>
                                        <div class="widget-shopping-cart-footer-head--price">
                                            45 AZN
                                        </div>
                                    </div>
                                    <a href="cart.html" class="button button--big button--dark button--full">GO TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-mainHeader-endBar">
                <div class="section-mainHeader-endBar-menu">
                    <div class="section-mainHeader-endBar-menu-item">
                        <a href="{{route('trainings')}}" class="section-mainHeader-endBar-menu-item--link button button--link">
                            {{__('language.trainings')}}
                        </a>
                    </div>
                    <div class="section-mainHeader-endBar-menu-item">
                        <a href="{{route('resource')}}" class="section-mainHeader-endBar-menu-item--link button button--link">
                            {{__('language.resources')}}
                        </a>
                    </div>
                    <div class="section-mainHeader-endBar-menu-item">
                        <a href="{{route('news')}}" class="section-mainHeader-endBar-menu-item--link button button--link">
                            {{__('language.news')}}
                        </a>
                    </div>
                    <div class="section-mainHeader-endBar-menu-item">
                        <a href="{{route('career')}}" class="section-mainHeader-endBar-menu-item--link button button--link">
                            {{__('language.career')}}
                        </a>
                    </div>
                    <div class="section-mainHeader-endBar-menu-item">
                        <a href="{{route('company')}}" class="section-mainHeader-endBar-menu-item--link button button--link">
                            {{__('language.company')}}
                        </a>
                    </div>
                    @if(app()->getLocale() == 'en')
                        <div class="section-mainHeader-endBar-menu-item dropdown dropdown--simpleMenu">
                            <a href="{{route('changeLang','en')}}" class="section-mainHeader-endBar-menu-item--link button button--link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Eng
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{route('changeLang','az')}}" class="dropdown-item">
                                    Az
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="section-mainHeader-endBar-menu-item dropdown dropdown--simpleMenu">
                            <a href="{{route('changeLang','az')}}" class="section-mainHeader-endBar-menu-item--link button button--link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Az
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{route('changeLang','en')}}" class="dropdown-item">
                                    Eng
                                </a>
                            </div>
                        </div>
                    @endif

                    <div class="section-mainHeader-endBar-menu-item">
                        <a href="#" class="section-mainHeader-endBar-menu-item--link button button--link widget-search--toggle">
                            <i class="ite-icons ite-search"></i>
                            <span class="visually-hidden">Search</span>
                        </a>
                    </div>
                    <div class="section-mainHeader-endBar-menu-item dropdown dropdown--simpleMenu dropdown--withOutArrow">
                        <a href="#" class="section-mainHeader-endBar-menu-item--link button button--big button--link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ite-icons ite-basket-outline"></i>
                            <span class="visually-hidden">Basket</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="widget-shopping-cart">
                                <div class="widget-shopping-cart-items">
                                    <a href="#" class="widget-shopping-cart-item">
                                        <div class="widget-shopping-cart-item-image">
                                            <img src="{{asset('assets/images/shopping-cart.png')}}" class="widget-shopping-cart-item-image--img" alt="Microsoftun Yenilikçi Müəllim (MİE) proqramına hazırlıq" />
                                        </div>
                                        <div class="widget-shopping-cart-item-content">
                                            <h4 class="widget-shopping-cart-item-content--header">
                                                Microsoftun Yenilikçi Müəllim (MİE) proqramına hazırlıq
                                            </h4>
                                            <p class="widget-shopping-cart-item-content--date">
                                                14 November-18 November
                                            </p>
                                            <span class="widget-shopping-cart-item-content--price">
                                            56 AZN
                                        </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="widget-shopping-cart-footer">
                                    <div class="widget-shopping-cart-footer-head">
                                        <div class="widget-shopping-cart-footer-head--header">
                                            {{__('language.total')}}:
                                        </div>
                                        <div class="widget-shopping-cart-footer-head--price">
                                            45 AZN
                                        </div>
                                    </div>
                                    <a href="{{route('gotocart')}}" class="button button--big button--dark button--full">{{__('language.gotocart')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-mainHeader-endBar-menu-item">
                        <a href="{{route('contact')}}" class="section-mainHeader-endBar-menu-item--link button button--dark">
                            {{__('language.getInTouch')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-search">
        <form class="container-lg widget-search--container">
            <button type="submit" class="button button--transparent button--dark button--big button--link button--onlyIcon ite-search">
                Search icon
            </button>
            <input name="search" id="search" class="input input--extraBig input--frameless" placeholder="What do you want to learn?" />
            <button class="button button--transparent button--dark button--big button--link button--onlyIcon ite-times widget-search--toggle" type="reset">
                Close search widget
            </button>
        </form>
    </div>
    <div class="section-mainHeader-mobilContainer">
        <div class="section-mainHeader-mobilContainer-head">
            <a href="#" class="section-mainHeader-mobilContainer-head--close">
                <i class="ite-icons ite-times"></i>
            </a>
        </div>
        <div class="section-mainHeader-mobilContainer-mainMenu">
            <div class="section-mainHeader-mobilContainer-mainMenu-item">
                <a href="{{route('dashboard')}}" class="section-mainHeader-mobilContainer-mainMenu-item--link active">
                    Home
                </a>
            </div>
            <div class="section-mainHeader-mobilContainer-mainMenu-item">
                <a href="{{route('trainings')}}" class="section-mainHeader-mobilContainer-mainMenu-item--link">
                    Trainings
                </a>
            </div>
            <div class="section-mainHeader-mobilContainer-mainMenu-item">
                <a href="{{route('news')}}" class="section-mainHeader-mobilContainer-mainMenu-item--link">
                    {{__('language.news')}}
                </a>
            </div>
            <div class="section-mainHeader-mobilContainer-mainMenu-item">
                <a href="{{route('career')}}" class="section-mainHeader-mobilContainer-mainMenu-item--link">
                    Career
                </a>
            </div>
            <div class="section-mainHeader-mobilContainer-mainMenu-item">
                <a href="{{route('company')}}" class="section-mainHeader-mobilContainer-mainMenu-item--link">
                    Company
                </a>
            </div>
            <div class="section-mainHeader-mobilContainer-mainMenu-item">
                <a href="{{route('contact')}}" class="button button--dark button--big">
                    Get in touch
                </a>
            </div>
        </div>
        <div class="section-mainHeader-mobilContainer-minorMenu">
            <div class="section-mainHeader-mobilContainer-minorMenu-item">
                <a href="login.html"
                   class="button button--link section-mainHeader-mobilContainer-minorMenu-item--link dropdown-toggle"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">
                    Sign In / Register
                </a>
                <div class="dropdown-menu dropdown-menu-start">
                    <div class="widget-account">
                        <div class="widget-account-item">
                            <a href="account_courses.html" class="widget-account-item--link">
                                My Courses
                            </a>
                        </div>
                        <div class="widget-account-item">
                            <a href="account_settings.html" class="widget-account-item--link">
                                Settings
                            </a>
                        </div>
                        <div class="widget-account-item">
                            <a href="#" class="widget-account-item--link"> Log out </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-mainHeader-mobilContainer-minorMenu-item dropdown dropdown--simpleMenu dropdown--withOutArrow">
                <a href="#" class="section-mainHeader-mobilContainer-minorMenu-item--link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Check Certification
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <div class="widget-certification">
                        <div class="widget-certification-head">
                            <h4 class="widget-certification-head--header">
                                Check Certification
                            </h4>
                        </div>
                        <div class="widget-certification-content">
                            <input class="input widget-certification-content--input" name="certification" id="certification" placeholder="#746589" />
                            <button class="button button--dark button--small widget-certification-content--button">Check</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-mainHeader-mobilContainer-footer">
            <div class="section-mainHeader-mobilContainer-footer-socialMenu">
                <div class="section-mainHeader-mobilContainer-footer-socialMenu-item">
                    <a href="#" class="section-mainHeader-mobilContainer-footer-socialMenu-item--link button button--link button--silver-outline">
                        <i class="ite-icons ite-fb"></i>
                    </a>
                </div>
                <div class="section-mainHeader-mobilContainer-footer-socialMenu-item">
                    <a href="#" class="section-mainHeader-mobilContainer-footer-socialMenu-item--link button button--link button--silver-outline">
                        <i class="ite-icons ite-instagram"></i>
                    </a>
                </div>
                <div class="section-mainHeader-mobilContainer-footer-socialMenu-item">
                    <a href="#" class="section-mainHeader-mobilContainer-footer-socialMenu-item--link button button--link button--silver-outline">
                        <i class="ite-icons ite-youtube"></i>
                    </a>
                </div>
                <div class="section-mainHeader-mobilContainer-footer-socialMenu-item">
                    <a href="#" class="section-mainHeader-mobilContainer-footer-socialMenu-item--link button button--link button--silver-outline">
                        <i class="ite-icons ite-linkedn"></i>
                    </a>
                </div>
                <div class="section-mainHeader-mobilContainer-footer-socialMenu-item">
                    <a href="#" class="section-mainHeader-mobilContainer-footer-socialMenu-item--link button button--link button--silver-outline">
                        <i class="ite-icons ite-telegram"></i>
                    </a>
                </div>
            </div>
            <div class="section-mainHeader-mobilContainer-footer-langMenu">
                <div class="section-mainHeader-mobilContainer-footer-langMenu-item">
                    <a href="{{route('changeLang','az')}}" class="section-mainHeader-mobilContainer-footer-langMenu-item--link {{(app()->getLocale() === 'az') ? 'active' : ''}}">
                        Az
                    </a>
                </div>
                <div class="section-mainHeader-mobilContainer-footer-langMenu-item">
                    <a href="{{route('changeLang','en')}}" class="section-mainHeader-mobilContainer-footer-langMenu-item--link {{(app()->getLocale() === 'en') ? 'active' : ''}}">
                        Eng
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MAIN HEADERS END -->
<!-- HEADERS END -->




