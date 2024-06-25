<!-- Start header area -->
<header class="header__section mb-20">
    <div class="header__topbar border-bottom">
        <div class="container">
            <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                <ul class="header__topbar--info d-none d-lg-flex">
                    <li class="header__info--list">
                        <a class="header__info--link" href="{{ route('about') }}">{{ Str::upper(__('site.about_us')) }}</a>
                    </li>
                    <li class="header__info--list">
                        <a class="header__info--link" href="mailto:info@consult-tm.by">
                            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.368 9.104C7.26133 9.17867 7.13867 9.216 7 9.216C6.86133 9.216 6.744 9.17867 6.648 9.104L0.36 4.624C0.264 4.56 0.178667 4.54933 0.104 4.592C0.04 4.624 0.00800002 4.69867 0.00800002 4.816V11.984C0.00800002 12.112 0.0506667 12.2187 0.136 12.304C0.221333 12.3893 0.322667 12.432 0.44 12.432H13.56C13.6773 12.432 13.7787 12.3893 13.864 12.304C13.96 12.2187 14.008 12.112 14.008 11.984V4.816C14.008 4.69867 13.9707 4.624 13.896 4.592C13.8213 4.54933 13.736 4.56 13.64 4.624L7.368 9.104ZM6.76 8.32C6.84533 8.37333 6.92533 8.4 7 8.4C7.08533 8.4 7.16533 8.37333 7.24 8.32L12.52 4.56C12.6373 4.464 12.696 4.352 12.696 4.224V0.783999C12.696 0.666666 12.6533 0.570666 12.568 0.495999C12.4933 0.410666 12.3973 0.367999 12.28 0.367999H1.72C1.60267 0.367999 1.50667 0.410666 1.432 0.495999C1.35733 0.570666 1.32 0.666666 1.32 0.783999V4.224C1.32 4.37333 1.37333 4.48533 1.48 4.56L6.76 8.32ZM3.784 2.064H9.96C10.088 2.064 10.1947 2.112 10.28 2.208C10.3653 2.29333 10.408 2.4 10.408 2.528C10.408 2.64533 10.3653 2.74667 10.28 2.832C10.1947 2.91733 10.088 2.96 9.96 2.96H3.784C3.656 2.96 3.54933 2.91733 3.464 2.832C3.37867 2.74667 3.336 2.64533 3.336 2.528C3.336 2.4 3.37867 2.29333 3.464 2.208C3.54933 2.112 3.656 2.064 3.784 2.064ZM3.784 3.632H9.96C10.088 3.632 10.1947 3.68 10.28 3.776C10.3653 3.86133 10.408 3.96267 10.408 4.08C10.408 4.19733 10.3653 4.304 10.28 4.4C10.1947 4.48533 10.088 4.528 9.96 4.528H3.784C3.656 4.528 3.54933 4.48533 3.464 4.4C3.37867 4.31467 3.336 4.21333 3.336 4.096C3.336 3.968 3.37867 3.86133 3.464 3.776C3.54933 3.68 3.656 3.632 3.784 3.632Z" fill="#37A764"/>
                            </svg>
                            info@consult-tm.by</a>
                    </li>
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
                    <h1 class="main__logo--title"><a class="main__logo--link" href="{{ route('home') }}"><img class="main__logo--img" src="{{ asset('resources/img/logo/nav-log.webp') }}" alt="Консалтинженеринг ТМ"></a></h1>
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
                    <img src="{{ asset('resources/img/logo/nav-log.webp') }}" alt="Консалтинженеринг ТМ" width="158" height="36">
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
