<x-app-layout>
    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section pb-10">
            <div class="container">
                <div class="hero__slider--inner hero__slider--ml hero__slider--activation swiper">
                    <div class="hero__slider--wrapper swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class="hero__slider--items home1-slider1-bg">
                                <div class="slider__content">
                                    <h2><span class="text__secondary">Профессиональная</span></h2>
                                    <h2 class="slider__maintitle h1">Юридическая <br> <span class="slider__maintitle--inner__text">поддержка</span></h2>
                                </div>
                                <div class="hero__slider--layer">
                                    <img class="slider__layer--img " src="{{ asset('resources/img/slider/home1-slider4-layer.webp') }}" alt="Профессиональная юридическая поддержка">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="hero__slider--items home1-slider1-bg">
                                <div class="slider__content">
                                    <h2 class="slider__maintitle h1"><span class="text__secondary">Регистрация</span> <br>юридического <br> <span class="slider__maintitle--inner__text">лица</span></h2>
                                    <span class="slider__price--text text__secondary">Под ключ</span>
                                </div>
                                <div class="hero__slider--layer">
                                    <img class="slider__layer--img " src="{{ asset('resources/img/slider/home1-slider2-layer.webp') }}" alt="Регистрация юридического лица. Под ключ.">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="hero__slider--items home1-slider1-bg">
                                <div class="slider__content">
                                    <h2 class="slider__maintitle h1"><span class="text__secondary">Комплексное</span> сопровождение <br> <span class="slider__maintitle--inner__text">и защита интересов бизнеса</span></h2>
                                </div>
                                <div class="hero__slider--layer">
                                    <img class="slider__layer--img " src="{{ asset('resources/img/slider/home1-slider3-layer.webp') }}" alt="Комплексное сопровождение и защита интересов бизнеса">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </div>
                </div>
            </div>
        </section>
        <!-- End slider section -->

        @livewire('popular_services')

        <!-- Start main about section -->
        <section class="main__about--section section--padding pt-0" id="funfactId">
            <div class="container">
                <div class="main__about--area position__relative">
                    <div class="main__about__content">
                        <h3 class="main__about__content--title mb-30">О нас</h3>
                        <p class="main__about__content--description mb-15">Юридическая компания Консалтинженеринг ТМ — это надежные адвокаты и юристы высочайшей квалификации с безупречной репутацией, профессионализмом и практическим опытом, готовые к решению абсолютно любых юридических проблем в рамках правового поля. Специалисты юр бюро оказывают правовую, консультационную и судебную помощь физлицам и бизнесу в Минске, Минской области и всей Беларуси в соответствии с законом.</p>
                        <div class="main__about__content--counter text-center text__secondary">
                            <h2 class="counter__title">Помогаем клиентам, <br>поможем и вам. Уже более, лет</h2>
                            <span class="counter__number js-counter" data-count="15">0</span>
                        </div>
                    </div>
                    <div class="main__about__info border-radius-5">
                        <h3 class="main__about__info--title text-white mb-15">Наша миссия</h3>
                        <p class="main__about__info--description text-white mb-15">Предоставление высококачественных юридических услуг по доступным ценам за счёт исключения непрофильных расходов</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End main about section -->

        @if($MAIN_PHONE)
            <!-- Start discount banner section -->
            <section class="discount__banner--section section--padding pt-0">
                <div class="container">
                    <div class="discount__banner--thumbnail">
                        <a class="display-block position-relative" href="tel:{{ $MAIN_PHONE }}">
                            <img class="discount__banner--thumbnail__img" src="{{ asset('resources/img/banner/discount-bg.webp') }}" alt="Консультация юриста бесплатно {{ str_replace('tel:', '', phone($MAIN_PHONE)->formatRFC3966()) }}">
                            <span class="discount__banner--text ">Консультация юриста <span class="text__secondary">бесплатно</span> <span class="text-nowrap">{{ str_replace('tel:', '', phone($MAIN_PHONE)->formatRFC3966()) }}</span></span>
                        </a>
                    </div>
                </div>
            </section>
            <!-- End discount banner section -->
        @endif

        @livewire('top_services')

        <!-- Start principles section -->
        <section class="principles--section section--padding pt-0">
            <div class="container">
                <div class="section__heading border-bottom mb-30">
                    <h2 class="section__heading--maintitle">Принципы <span>нашей работы</span></h2>
                </div>
                <div class="principles__description border-radius-10">
                    <p>Мы ориентированы на обеспечение высокого уровня профессионализма, эффективности, доверия со стороны наших клиентов. Мы стремимся к тому, чтобы каждый клиент получил качественное правовое обслуживание, которое учитывает их уникальные потребности, цели. Ниже представлены принципы, которые лежат в основе нашей работы:</p>

                    <ol class="rounded">
                        <li><span class="principles__title">Профессионализм</span> - гордимся опытом, компетенцией наших юристов, которые обладают глубокими знаниями в различных областях права. Наша команда учтет детали каждой ситуации, чтобы разработать наилучшее решение.</li>
                        <li><span class="principles__title">Индивидуальный подход</span> - понимаем, что каждый клиент уникален — его ситуация требует индивидуального подхода. Мы тщательно анализируем особенности каждого дела, чтобы предложить наиболее подходящие решения, отвечающие потребностям клиента.</li>
                        <li><span class="principles__title">Открытость и честность</span> - ценим доверие, которое нам доверяют наши клиенты. Поэтому мы всегда поддерживаем прозрачные отношения, предоставляя точную информацию о процессе, ожидаемых результатах, а также честно оценивая сильные и слабые стороны каждой ситуации.</li>
                        <li><span class="principles__title">Эффективность</span> - ценим время, ресурсы наших клиентов, поэтому наша работа направлена на достижение отличных результатов в оговоренные сроки. Мы стараемся минимизировать бюрократические процессы, ускорить прохождение процедур.</li>
                        <li><span class="principles__title">Полное понимание</span> - уделяем особое внимание тому, чтобы наши клиенты полностью понимали все аспекты своего дела. Мы разъясняем сложные правовые термины, процессы на понятном языке, чтобы клиенты могли принимать осознанные решения.</li>
                        <li><span class="principles__title">Конфиденциальность</span> - соблюдаем принцип конфиденциальности, обязуемся защищать личную информацию, данные наших клиентов.</li>
                        <li><span class="principles__title">Постоянное обучение</span> - следим за изменениями в законодательстве и судебной практике, чтобы быть в курсе последних трендов и практик. Наша команда постоянно совершенствуется, обучается для того, чтобы предоставлять актуальные, компетентные юридические услуги.</li>
                    </ol>
                    <p>Наши принципы работы способствуют созданию долгосрочных партнерских отношений с нашими клиентами, обеспечивая им эффективную, надежную юридическую поддержку в различных сферах.</p>
                </div>
            </div>
        </section>
        <!-- End principles section -->

        @livewire('brands')

    </main>
</x-app-layout>
