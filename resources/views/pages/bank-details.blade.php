<x-app-layout>
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="{{ route('home') }}">{{ __('site.home') }}</a></li>
                                <li class="breadcrumb__content--menu__items"><span>{{ __('site.bank_details') }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <section class="mt-5">
            <div class="container">
                <div class="section__heading border-bottom">
                    <h2 class="section__heading--maintitle">Банковские <span>реквизиты</span></h2>
                </div>
            </div>
        </section>

        @livewire('bank_details')

        <!-- Start discount banner section -->
        <section class="discount__banner--section section--padding pt-0">
            <div class="container">
                <div class="discount__banner--thumbnail">
                    <a class="display-block position-relative" href="tel:{{ $MAIN_PHONE }}"><img class="discount__banner--thumbnail__img" src="{{ asset('resources/img/banner/discount-bg.webp') }}" alt="Остались вопросы? Звоните: {{ str_replace('tel:', '', phone($MAIN_PHONE)->formatRFC3966()) }}">
                        <span class="discount__banner--text ">Остались вопросы? <span class="text__secondary">Звоните: </span> <span class="text-nowrap">{{ str_replace('tel:', '', phone($MAIN_PHONE)->formatRFC3966()) }}</span></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- End discount banner section -->

        <section class="mb-25">
            <div class="container">
                <div class="section__heading border-bottom">
                    <h2 class="section__heading--maintitle">Наши <span>клиенты и партнеры</span></h2>
                </div>
            </div>
        </section>
        @livewire('brands')

        @include('layouts.partials.shipping')
    </main>
</x-app-layout>
