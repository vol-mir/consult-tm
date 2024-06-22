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
                                <li class="breadcrumb__content--menu__items"><span>{{ __('site.service') }} </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        @livewire('service-detail', ['slug' => $slug])

        @include('layouts.partials.shipping')

    </main>
</x-app-layout>
