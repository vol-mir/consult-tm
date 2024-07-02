<x-app-layout>
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title">{{ $name }}</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="{{ route('home') }}">{{ __('site.home') }}</a></li>
                                <li class="breadcrumb__content--menu__items"><span>{{ __('site.category') }} </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        @livewire('category-detail', ['slug' => $slug])

        @if($description)
            <!-- Start category details section -->
            <section class="category__details--section mb-60">
                <div class="container">
                    <div class="category__details--content">
                        <h2 class="category__details--title mb-10">{{ $name }}</h2>
                        {!! $description !!}
                    </div>
                </div>
            </section>
            <!-- End category details section -->
        @endif

        @include('layouts.partials.shipping')

    </main>
</x-app-layout>
