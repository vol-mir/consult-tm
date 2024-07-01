<!-- Start header area -->
<header class="header__section mb-20">
    <div class="header__topbar border-bottom">
        <div class="container">
            <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                <ul class="header__topbar--info d-none d-lg-flex">
                    <li class="header__info--list">
                        <a class="header__info--link" href="{{ route('contacts') }}">{{ Str::upper(__('site.contacts')) }}</a>
                    </li>
                    <li class="header__info--list">
                        <a class="header__info--link" href="{{ route('about') }}">{{ Str::upper(__('site.about_us')) }}</a>
                    </li>
                    @if($MAIN_PHONE)
                        <li class="header__info--list">
                            <a class="header__info--link" href="tel:{{ $MAIN_PHONE }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 31.568 31.128">
                                    <path d="M26.676,16.564l7.892-7.782L26.676,1V5.669H20.362v6.226h6.314Zm3.157,7a18.162,18.162,0,0,1-5.635-.887,1.627,1.627,0,0,0-1.61.374l-3.472,3.424a23.585,23.585,0,0,1-10.4-10.257l3.472-3.44a1.48,1.48,0,0,0,.395-1.556,17.457,17.457,0,0,1-.9-5.556A1.572,1.572,0,0,0,10.1,4.113H4.578A1.572,1.572,0,0,0,3,5.669,26.645,26.645,0,0,0,29.832,32.128a1.572,1.572,0,0,0,1.578-1.556V25.124A1.572,1.572,0,0,0,29.832,23.568Z" fill="#37A764"></path>
                                </svg>
                                {{ str_replace('tel:', '', phone($MAIN_PHONE)->formatRFC3966()) }}
                            </a>
                        </li>
                    @endif
                </ul>
                <div class="header__top--right d-flex align-items-center">
                    @livewire('social_networks', ['place' => 'header'])
                </div>
            </div>
        </div>
    </div>

    <div class="main__header header__sticky">
        <div class="container">
            <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                        <span class="visually-hidden">Offcanvas Menu Open</span>
                    </a>
                </div>
                <div class="main__logo">
                    <h1 class="main__logo--title"><a class="main__logo--link" href="{{ route('home') }}"><img class="main__logo--img" src="{{ asset('resources/img/logo/nav-log.webp') }}" alt="{{ $COMPANY }}"></a></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="header__bottom bg__primary">
        <div class="container">
            <div class="header__bottom--inner position__relative d-flex align-items-center">
                <div class="categories__menu mobile-v-none">
                    <div class="categories__menu--header bg__secondary text-white d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#categoriesAccordion">
                        <svg class="categories__list--icon" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="13" height="1.5" fill="currentColor"/>
                            <rect y="4.44434" width="18" height="1.5" fill="currentColor"/>
                            <rect y="8.88892" width="15" height="1.5" fill="currentColor"/>
                            <rect y="13.3333" width="17" height="1.5" fill="currentColor"/>
                        </svg>

                        <span class="categories__menu--title">{{ __('site.categories') }}</span>
                        <svg class="categories__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="dropdown__categories--menu border-radius-5 active collapse {{ Route::is('home') ? 'show' : '' }}" id="categoriesAccordion">
                        @livewire('categories', ['ulClass' => 'd-none d-lg-block'])
                    </div>
                </div>

                <div class="categories__menu mobile-v-block">
                    <div class="categories__menu--header bg__secondary text-white d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#categoriesAccordion2">
                        <svg class="categories__list--icon" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="13" height="1.5" fill="currentColor"/>
                            <rect y="4.44434" width="18" height="1.5" fill="currentColor"/>
                            <rect y="8.88892" width="15" height="1.5" fill="currentColor"/>
                            <rect y="13.3333" width="17" height="1.5" fill="currentColor"/>
                        </svg>

                        <span class="categories__menu--title">{{ __('site.categories') }}</span>
                        <svg class="categories__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="dropdown__categories--menu border-radius-5 active collapse" id="categoriesAccordion2">
                        <nav class="category__mobile--menu">
                            @livewire('categories', ['ulClass' => 'category__mobile--menu_ul'])
                        </nav>
                    </div>
                </div>

                <div class="header__right--area d-flex justify-content-between align-items-center">
                    <div class="header__menu">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white" href="{{ route('home') }}">{{ __('site.home') }}</a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white" href="{{ route('about') }}">{{ __('site.about_us') }}</a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white" href="{{ route('contacts') }}">{{ __('site.company') }}
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="{{ route('contacts') }}" class="header__sub--menu__link">{{ __('site.contacts') }}</a></li>
                                        <li class="header__sub--menu__items"><a href="{{ route('about') }}" class="header__sub--menu__link">{{ __('site.about_us') }}</a></li>
                                        <li class="header__sub--menu__items"><a href="{{ route('policy_personal_data') }}" class="header__sub--menu__link">{{ __('site.policy_personal_data') }}</a></li>
                                        <li class="header__sub--menu__items"><a href="{{ route('policy_cookies') }}" class="header__sub--menu__link">{{ __('site.policy_cookies') }}</a></li>
                                        <li class="header__sub--menu__items"><a href="{{ route('bank_details') }}" class="header__sub--menu__link">{{ __('site.bank_details') }}</a></li>
                                    </ul>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white" href="{{ route('faq') }}">{{ __('site.buyers') }}
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="{{ route('faq') }}" class="header__sub--menu__link">{{ __('site.frequently') }}</a></li>
                                    </ul>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white" href="{{ route('contacts') }}">{{ __('site.contacts') }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Offcanvas header menu -->
    <div class="offcanvas__header">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link" href="{{ route('home') }}">
                    <img src="{{ asset('resources/img/logo/nav-log.webp') }}" alt="{{ $COMPANY }}" width="158" height="36">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>close</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="{{ route('home') }}">{{ __('site.home') }}</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="{{ route('about') }}">{{ __('site.about_us') }}</a></li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="{{ route('contacts') }}">{{ __('site.company') }}</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('contacts') }}" class="offcanvas__sub_menu_item">{{ __('site.contacts') }}</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('about') }}" class="offcanvas__sub_menu_item">{{ __('site.about_us') }}</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('policy_personal_data') }}" class="offcanvas__sub_menu_item">{{ __('site.policy_personal_data') }}</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('policy_cookies') }}" class="offcanvas__sub_menu_item">{{ __('site.policy_cookies') }}</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('bank_details') }}" class="offcanvas__sub_menu_item">{{ __('site.bank_details') }}</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="{{ route('faq') }}">{{ __('site.buyers') }}</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('faq') }}" class="offcanvas__sub_menu_item">{{ __('site.frequently') }}</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="{{ route('contacts') }}">{{ __('site.contacts') }}</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- End Offcanvas header menu -->

</header>
<!-- End header area -->
