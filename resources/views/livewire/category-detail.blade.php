<!-- Start shop section -->
<div class="shop__section section--padding">
    <div class="container">
        <div class="shop__product--wrapper">
            <div class="shop__header d-flex align-items-center justify-content-between mb-30">
                <div class="product__view--mode d-flex align-items-center">
                    <div class="product__view--mode__list">
                        <div class="product__tab--one product__grid--column__buttons d-flex justify-content-center">
                            <button class="product__grid--column__buttons--icons active" aria-label="grid btn" data-toggle="tab" data-target="#product_grid">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                    <g  transform="translate(-1360 -479)">
                                        <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4" transform="translate(1360 479)" fill="currentColor"/>
                                        <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4" transform="translate(1360 484)" fill="currentColor"/>
                                        <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4" transform="translate(1365 479)" fill="currentColor"/>
                                        <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4" transform="translate(1365 484)" fill="currentColor"/>
                                    </g>
                                </svg>
                            </button>
                            <button class="product__grid--column__buttons--icons" aria-label="list btn" data-toggle="tab" data-target="#product_list">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                    <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                        <g  transform="translate(12 -2)">
                                            <g id="Group_1326" data-name="Group 1326">
                                                <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                                <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                            </g>
                                            <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                                <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                                <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                            </g>
                                            <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                                <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3" height="2" transform="translate(1364 487)" fill="currentColor"/>
                                                <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9" height="2" transform="translate(1368 487)" fill="currentColor"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab_content">
                <div id="product_grid" class="tab_pane active show">
                    <div class="product__section--inner">
                        <div class="row mb--n30">
                            @foreach ($services as $service)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                    <article class="product__card">
                                        <div class="product__card--thumbnail">
                                            <a class="product__card--thumbnail__link display-block" href="{{ route('service', $service['slug']) }}">
                                                <img class="product__card--thumbnail__img product__primary--img" src="{{ asset('resources/img/other/default-services' . $service['image1'] . '.webp') }}" alt="product-img">
                                                <img class="product__card--thumbnail__img product__secondary--img" src="{{ asset('resources/img/other/default-services' . $service['image2'] . '.webp') }}" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__card--content">
                                            <ul class="rating product__card--rating d-flex">
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
                                            <p class="product__card--title"><a href="{{ route('service', $service['slug']) }}">{{ $service['name'] }}{{ $service['category'] ? ', ' . $service['category'] : '' }}</a></p>
                                            <div class="product__card--price">
                                                <span class="current__price">{{ $service['price'] ? 'от ' . $service['price'] . ' р.' : __('site.empty_price') }}</span>
                                            </div>
                                            <div class="product__card--footer">
                                                <a class="product__card--btn primary__btn" href="tel:+375339926176">{{ __('site.to_order') }}</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="product_list" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-1 mb--n30">
                            @foreach ($services as $service)
                                <div class="col mb-30">
                                    <div class="product__card product__list d-flex align-items-center">
                                        <div class="product__card--thumbnail product__list--thumbnail">
                                            <a class="product__card--thumbnail__link display-block" href="{{ route('service', $service['slug']) }}">
                                                <img class="product__card--thumbnail__img product__primary--img" src="{{ asset('resources/img/other/default-services' . $service['image1'] . '.webp') }}" alt="product-img">
                                                <img class="product__card--thumbnail__img product__secondary--img" src="{{ asset('resources/img/other/default-services' . $service['image2'] . '.webp') }}" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__card--content product__list--content">
                                            <h3 class="product__card--title"><a href="{{ route('service', $service['slug']) }}">{{ $service['name'] }}{{ $service['category'] ? ', ' . $service['category'] : '' }}</a></h3>
                                            <ul class="rating product__card--rating d-flex">
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
                                            <div class="product__list--price">
                                                <span class="current__price">{{ $service['price'] ? 'от ' . $service['price'] . ' р.' : __('site.empty_price') }}</span>
                                            </div>
                                            <p class="product__card--content__desc mb-20">{{ $service['description'] }}</p>
                                            <a class="product__card--btn primary__btn" href="tel:+375339926176">{{ __('site.to_order') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End shop section -->
