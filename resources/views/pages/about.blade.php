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
                                <li class="breadcrumb__content--menu__items"><span>{{ __('site.about_us') }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start about section -->
        <section class="about__section section--padding mb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about__thumb d-flex">
                            <div class="about__thumb--items">
                                <img class="about__thumb--img border-radius-5" src="{{ asset('resources/img/other/consult-tm-best1.webp') }}" alt="Консалтинженеринг ТМ">
                            </div>
                            <div class="about__thumb--items position__relative">
                                <img class="about__thumb--img border-radius-5" src="{{ asset('resources/img/other/consult-tm-best2.webp') }}" alt="Консалтинженеринг ТМ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about__content">
                            <span class="about__content--subtitle text__secondary mb-20">Консалтинженеринг ТМ</span>
                            <p class="about__content--desc mb-20">Наша юридическая фирма объединяет профессионалов высочайшей квалификации, обладающих безупречной репутацией и многолетним опытом. </p>
                            <p class="about__content--desc mb-20">Наши юристы тщательно анализируют каждое дело, разрабатывают индивидуальные стратегии и предлагают наиболее эффективные решения, адаптированные под конкретные нужды клиентов.</p>
                            <p class="about__content--desc mb-20">Мы стремимся к долгосрочным партнерским отношениям с нашими клиентами, основанным на доверии, открытости и профессионализме.</p>
                            <p class="about__content--desc mb-20">Наши клиенты могут быть уверены, что их дела находятся в надежных руках.</p>
                            <p class="about__content--desc mb-25">Независимо от сложности и масштаба задачи, мы прилагаем максимум усилий для достижения положительного результата.</p>
                            <p class="about__content--desc mb-25">Ваш успех — наша главная цель, и мы готовы сделать все возможное, чтобы защитить ваши права и интересы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about section -->

        <!-- Start counterup banner section -->
        <div class="counterup__banner--section counterup__banner__bg2" id="funfactId">
            <div class="container">
                <div class="row row-cols-1 align-items-center">
                    <div class="col">
                        <div class="counterup__banner--inner position__relative d-flex align-items-center justify-content-between">
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">ПОГАШЕНО ДОЛГОВ <br> КОМПАНИЙ ПО <br> ПРОЦЕДУРЕ БАНКРОТСТВА <br> В ТЫС. РУБ., БОЛЕЕ ЧЕМ</h2>
                                <span class="counterup__number js-counter" data-count="10000">0</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">ВЗЫСКАНО В ПОЛЬЗУ <br> КЛИЕНТА ПО <br> ДЕБИТОРСКОЙ ЗАДОЛЖЕННОСТИ <br> В ТЫС. РУБ., БОЛЕЕ ЧЕМ</h2>
                                <span class="counterup__number js-counter" data-count="1500">0</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">ОБЩАЯ СУММА <br> ОСПОРЕННЫХ ВЫИГРЫШНЫХ <br> СДЕЛОК <br> В ТЫС. РУБ., БОЛЕЕ ЧЕМ</h2>
                                <span class="counterup__number js-counter" data-count="1000">0</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">ОБЩАЯ СУММА ОБЖАЛОВАННЫХ  <br> АКТОВ ПРОВЕРКИ  <br> НАЛОГОВОЙ ИНСПЕКЦИИ <br> В ТЫС. РУБ., БОЛЕЕ ЧЕМ</h2>
                                <span class="counterup__number js-counter" data-count="6000">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End counterup banner section -->

        <!-- Start team members section -->
        <section class="team__section section--padding">
            <div class="container">
                <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">Над вашей проблемой будут работать</h2>
                </div>
                <div class="team__container">
                    <div class="row mb--n30">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('resources/img/other/team1.png') }}" alt="Руководитель команды">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Руководитель команды</h3>
                                    <span class="team__content--subtitle">Магистр юридических наук, стаж юридической работы 18 лет, в том числе по лицензии на оказание юридических услуг и адвокатской лицензии 13 лет</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('resources/img/other/team2.png') }}" alt="Глава юридической службой">
                                </div>
                                <div class="team__content">
                                    <h3 class="team__content--title">Глава юридической службой</h3>
                                    <span class="team__content--subtitle">Высшее юридическое образование, стаж юридической работы 24 года, в том числе по лицензии на оказание юридических услуг 7 лет</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('resources/img/other/team3.png') }}" alt="Антикризисный управляющий">
                                </div>
                                <div class="team__content">
                                    <h3 class="team__content--title">Антикризисный управляющий</h3>
                                    <span class="team__content--subtitle">Высшее юридическое образование, стаж антикризисного управления – 3 года, более 15 завершенных дел. Имеет аттестат категории А</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('resources/img/other/team4.png') }}" alt="Бухгалтер">
                                </div>
                                <div class="team__content">
                                    <h3 class="team__content--title">Бухгалтер</h3>
                                    <span class="team__content--subtitle">Высшее экономическое образование, стаж бухгалтерской работы 21 год, в том числе по сопровождению деятельности юридических лиц и ИП 11 лет</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__header--desc style2 text-center mb-40">
                    <p class="about__content--desc mb-25">Кроме этого, у нас в штате есть юристы, специализирующиеся в разных областях права. Также сотрудничаем с адвокатами различных специализаций.</p>
                </div>
            </div>
        </section>
        <!-- End team members section -->

        <!-- Start discount banner section -->
        <section class="discount__banner--section section--padding pt-0">
            <div class="container">
                <div class="discount__banner--thumbnail">
                    <a class="display-block position-relative" href="tel:+375339926176"><img class="discount__banner--thumbnail__img" src="{{ asset('resources/img/banner/discount-bg.webp') }}" alt="Остались вопросы? Звоните: +375 33 992-61-76">
                        <span class="discount__banner--text ">Остались вопросы? <span class="text__secondary">Звоните: </span> <span class="text-nowrap">+375 33 992-61-76</span></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- End discount banner section -->

        <!-- Start team members section -->
        <section class="team__section section--padding pt-5 pb-0">
            <div class="container">
                <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">Наши Клиенты и Партнеры</h2>
                    <p class="about__content--desc mb-25">Мы не можем раскрыть информацию о многих наших клиентах из-за действующих соглашений о неразглашении, поэтому указали только некоторых из тех, с кем сотрудничали:</p>
                </div>
            </div>
        </section>
        <!-- End team members section -->

        @livewire('brands')

        @include('layouts.partials.shipping')
    </main>
</x-app-layout>
