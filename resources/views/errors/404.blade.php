<x-app-layout>
    <main class="main__content_wrapper">

        <!-- Start error section -->
        <section class="error__section section--padding">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="error__content text-center">
                            <img class="error__content--img display-block mb-50" src="{{ asset('resources/img/other/404-thumb.webp') }}" alt="error-img">
                            <h2 class="error__content--title">Страница не найдена!</h2>
                            <p class="error__content--desc">Воспользуйтесь навигацией или поиском, расположенными вверху, чтобы найти нужную вам информацию.</p>
                            <a class="error__content--btn primary__btn" href="{{ route('home') }}">Вернуться на Главную</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End error section -->

        @include('layouts.partials.shipping')
    </main>
</x-app-layout>
