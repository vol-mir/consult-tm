<!-- Start footer section -->
<footer class="footer__section footer__bg">
    <div class="container">
        <div class="newsletter__area">
            <div class="newsletter__inner d-flex justify-content-between align-items-center">
                <div class="newsletter__content">
                    <p class="newsletter__title h2">Подписаться <span class="text__secondary">на рассылку</span></p>
                    <p class="newsletter__desc">Подпишитесь на скидки, акции и новости!</p>
                </div>
                <div class="newsletter__subscribe">
                    @livewire('forms.subscription_form')
                </div>
            </div>
        </div>
        <div class="main__footer">
            <div class="row ">
                <div class="col-lg-4 col-md-10">
                    <div class="footer__widget">
                        <p class="footer__widget--title h2">{{ __('site.about_us') }} <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </p>

                        <div class="footer__widget--inner">
                            <p class="footer__widget--desc">{{ $FULL_NAME }}</p>
                            <address class="footer__widget--desc">Адрес: {{ $ADDRESS }}</address>
                            <p class="footer__widget--desc">Телефон: <a class="footer__widget--desc" href="tel:{{ $MAIN_PHONE }}">{{ str_replace('tel:', '', phone($MAIN_PHONE)->formatRFC3966()) }}</a></p>
                            <p class="footer__widget--desc">Email: <a class="footer__widget--desc" href="mailto:{{ $MAIN_EMAIL }}">{{ $MAIN_EMAIL }}</a></p><br>
                            <p class="footer__widget--desc">{{ __('site.social_networks') }}</p>

                            @livewire('social_networks', ['place' => 'footer'])
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer__widget">
                        <p class="footer__widget--title h2">{{ __('site.company') }} <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </p>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{ route('contacts') }}">{{ __('site.contacts') }}</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{ route('about') }}">{{ __('site.about_us') }}</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{ route('policy_personal_data') }}">{{ __('site.policy_personal_data') }}</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{ route('policy_cookies') }}">{{ __('site.policy_cookies') }}</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{ route('bank_details') }}">{{ __('site.bank_details') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer__widget">
                        <p class="footer__widget--title h2">{{ __('site.buyers') }} <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </p>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{ route('faq') }}">{{ __('site.frequently') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @if (Route::is('home'))
            <div class="shipping__inner d-flex">
            <div class="shipping__items d-flex align-items-center">
                <div class="shipping__icon text-white">
                    <img src="{{ asset('resources/img/other/shipping1.webp') }}" alt="Серьёзный опыт">
                </div>
                <div class="shipping__content">
                    <p class="shipping__content--title text-white h3">Серьёзный опыт</p>
                    <p class="shipping__content--desc">Более 15 лет опыта</p>
                </div>
            </div>
            <div class="shipping__items d-flex align-items-center">
                <div class="shipping__icon text-white">
                    <img src="{{ asset('resources/img/other/shipping2.webp') }}" alt="Ясность">
                </div>
                <div class="shipping__content">
                    <p class="shipping__content--title text-white h3">Ясность</h2>
                    <p class="shipping__content--desc">Избегаем сложных терминов</p>
                </div>
            </div>
            <div class="shipping__items d-flex align-items-center">
                <div class="shipping__icon text-white">
                    <img src="{{ asset('resources/img/other/shipping3.webp') }}" alt="Работа на результат">
                </div>
                <div class="shipping__content">
                    <p class="shipping__content--title text-white h3">Работа на результат</p>
                    <p class="shipping__content--desc">Не обещаем напрасно</p>
                </div>
            </div>
            <div class="shipping__items d-flex align-items-center">
                <div class="shipping__icon text-white">
                    <img src="{{ asset('resources/img/other/shipping4.webp') }}" alt="Конфиденциальность">
                </div>
                <div class="shipping__content">
                    <p class="shipping__content--title text-white h3">Конфиденциальность</p>
                    <p class="shipping__content--desc">Гарантируем конфиденциальность</p>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">
                <div class="footer__logo">
                    <a class="footer__logo--link" href="{{ route('home') }}"><img src="{{ asset('resources/img/logo/nav-log-light.webp') }}" alt="{{ $COMPANY }}"></a>
                </div>
                <p class="copyright__content"><span class="text__secondary">© 2023-{{ now()->year }}</span> <a class="copyright__content--link" target="_blank" href="{{ route('home') }}">ООО "Консалтинженеринг ТМ"</a> .  {{ __('site.all_rights_reserved') }}.</p>
            </div>
            <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">
                <p class="footer__text--info text-center">Обращаем ваше внимание на то, что данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой. Для получения подробной информации о стоимости оказываемых услуг и их наличии, пожалуйста, обращайтесь к нашим специалистам.</p>
            </div>
        </div>
    </div>
</footer>
<!-- End footer section -->
