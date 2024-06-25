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
                                <li class="breadcrumb__content--menu__items"><span>{{ __('site.frequently') }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- faq page section start -->
        <section class="faq__section section--padding">
            <div class="container">
                <div class="faq__section--inner">
                    <div class="face__step one border-bottom" id="accordionExample">
                        <h2 class="face__step--title h3 mb-30">Часто задаваемые вопросы</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Как часто вы проигрываете суды?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Мы не берёмся за бесперспективные дела, в которых по всем признакам нет возможности получить положительный исход. Изучив обстоятельства, мы всегда предупреждаем о возможных вариантах, чтобы сохранить их деньги. Мы дорожим своей репутацией и отзывами, не практикуем метод конвейера, когда берутся за всё в надежде на то, что дело выгорит.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Как быстро мне ответят?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Скорость ответа зависит от того устное или письменное обращение, а также от его сложности и срочности. Ведь иногда решение вопроса бывает мгновенным, а иногда может требовать дополнительного изучения законодательства и судебной практики. Это может занять больший срок — от пары дней до нескольких недель или месяцев.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">От чего зависит стоимость оказания услуг?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Оплата зависит от сложности ситуации и способа предоставления юридической консультации. Вы можете выбрать разные варианты сотрудничества: устные и письменные консультации, составление документов, представление в разных организациях и прочее. В каждом случае, расчёт происходит в зависимости от специфики и обстоятельств. Но одно можем сказать точно — при первичном звонке консультирование будет бесплатно.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Вы предоставляете профильных юристов?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Да, для решения поставленных задач у нас есть штатные юристы, которые специализируются на разных областях: хозяйственного права, недвижимости и строительстве, сертификации, бухгалтерии, инвестировании, трудовых отношениях (со стороны работника, нанимателя или руководителя), учёте кадров, интеллектуальной собственности, корпоративной практике, взыскании дебиторской задолженностей, ведении делопроизводства, регистрации бизнеса (ООО, ИП, ЧУП и др.), изменении статуса организаций (открытие, закрытие, реорганизация, расширение в виде представительств и филиалов включая иностранные, изменение формы собственности и т.д.), исковом производстве, купле и продаже как долей в бизнесе, так и выкуп полного права собственности (включая оценку и сопровождение в процессе сделки), налогообложении (ведение налогового учёта и его восстановление, курирование проверок). Поэтому, мы можем помочь по большинству задач в рамках вступивших в силу нормативных правовых актов законодательства Республики Беларусь.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Помогаете ли вы физическим лицам?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Мы оказываем юридические консультации физическим лицам, однако исходя из специфика своей работы. Мы не распаляемся на много направлений и можем помочь только в рамках тех сфер, на которых специализируемся — работе с организациями и индивидуальными предпринимателями. В рамках же жилищного, уголовного, административного права или просто посчитать налоги — мы не оказываем такой помощи, так как это не наша специализация.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Что можно получить от работы с вами?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Наша основная цель — получение максимального результата в ходе разрешения проблем бизнеса. В услуги входит анализ случая, который предоставит юрист профессионал. А также инструкцию как следует действовать в определённом положении и иная полезная информация. При необходимости, можете к нам обратиться за участием в представлении в различных инстанциях, если нет возможности, условий или желания сделать это самостоятельно. У нас квалифицированная команда, которая специализируется на разных подходах. Качество исполнения гарантируем.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq page section end -->

        <!-- Start discount banner section -->
        <section class="discount__banner--section section--padding pt-0">
            <div class="container">
                <div class="discount__banner--thumbnail">
                    <a class="display-block position-relative" href="tel:+375339926176"><img class="discount__banner--thumbnail__img" src="{{ asset('resources/img/banner/discount-bg.webp') }}" alt="Остались вопросы? Звоните: +375 33 992-61-76">
                        <span class="discount__banner--text ">Есть еще вопросы? <span class="text__secondary">Звоните: </span> <span class="text-nowrap">+375 33 992-61-76</span></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- End discount banner section -->

        @livewire('brands')

        @include('layouts.partials.shipping')

    </main>
</x-app-layout>
