<div>
    <!-- Start product details section -->
    <section class="product__details--section section--padding">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-md-2">
                <div class="col">
                    <<div class="product__details--media">
                        <div class="single__product--preview  swiper mb-25">
                            <div class="swiper-wrapper">
                                @for($i = 1; $i < 5; $i++)
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{ asset('resources/img/other/default-services' . $service['image' . $i] . '.webp') }}">
                                                <img class="product__media--preview__items--img" src="{{ asset('resources/img/other/default-services' . $service['image' . $i] . '.webp') }}" alt="{{ $service['name'] }}">
                                            </a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="{{ asset('resources/img/other/default-services' . $service['image' . $i] . '.webp') }}" data-gallery="product-media-preview">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                    <span class="visually-hidden">product view</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="single__product--nav swiper">
                            <div class="swiper-wrapper">
                                @for($i = 1; $i < 5; $i++)
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="{{ asset('resources/img/other/default-services' . $service['image' . $i] . '.webp') }}" alt="product-nav-img">
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="swiper__nav--btn swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                            <div class="swiper__nav--btn swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product__details--info">
                        <h2 class="product__details--info__title mb-15">{{ $service['name'] }}</h2>
                        <div class="product__details--info__price mb-12">
                            <span class="current__price">{{ $service['price'] ? 'от ' . $service['price'] . ' р.' : __('site.empty_price') }}</span>
                        </div>
                        <ul class="rating product__card--rating mb-15 d-flex">
                            @for($i = 1; $i <= $service['rating']; $i++)
                                <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                </li>

                                @if($service['rating'] > 6)
                                    @break;
                                @endif
                            @endfor

                            @for($i = 1; $i <= 5 - $service['rating']; $i++)
                                <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"/>
                                                 </svg>
                                            </span>
                                </li>
                            @endfor
                        </ul>
                        <p class="product__details--info__desc mb-15">{{ $service['description'] }}</p>
                        <div class="product__variant">
                            <div class="product__variant--list mb-15">
                                <a class="variant__buy--now__btn primary__btn text-center" href="tel:+375339926176">{{ __('site.to_order') }}</a>
                            </div>
                            <div class="product__variant--list mb-15">
                                <div class="product__details--info__meta">
                                    <p class="product__details--info__meta--list"><strong>{{ __('site.category') }}:</strong>
                                        <a href="{{ route('category', $service['category_slug']) }}" title="{{ $service['category'] }}">
                                            {{ $service['category'] }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details section -->

    <!-- Start product details tab section -->
    <section class="product__details--tab__section section--padding mb-50">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <ul class="product__tab--one product__details--tab d-flex mb-30">
                        <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">{{ __('site.description') }}</li>
                    </ul>
                    <div class="product__details--tab__inner border-radius-10">
                        <div class="tab_content">
                            <div id="description" class="tab_pane active show">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step mb-30">
                                        <h2 class="product__tab--content__title h4 mb-10">{{ $service['name'] }}</h2>
                                        {!! $service['presentation'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details tab section -->
</div>
