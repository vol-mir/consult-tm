<!-- Start contact section -->
<section class="contact__section section--padding">
    <div class="container">
        <div class="contact__section--heading text-center mb-40">
            <h2 class="contact__section--heading__maintitle">Связаться с нами</h2>
            <p class="contact__section--heading__desc">Специалист нашей компании квалифицированно проконсультирует вас по всем интересующим вопросам.</p>
        </div>
        <div class="main__contact--area position__relative">
            <div class="contact__form">
                <h3 class="contact__form--title mb-30">Мои контактные данные</h3>
                <form class="contact__form--inner" wire:submit.prevent="save">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="first_name">{{ __('fields.first_name') }} <span class="contact__form--label__star">*</span></label>
                                <input class="contact__form--input" name="first_name" id="first_name" placeholder="{{ __('fields.first_name') }}" type="text" required wire:model="first_name">
                            </div>
                            @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="last_name">{{ __('fields.last_name') }} <span class="contact__form--label__star">*</span></label>
                                <input class="contact__form--input" name="last_name" id="last_name" placeholder="{{ __('fields.last_name') }}" type="text" required wire:model="last_name">
                            </div>
                            @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="phone">{{ __('fields.phone') }} <span class="contact__form--label__star">*</span></label>
                                <input class="contact__form--input" name="number" id="phone" placeholder="{{ __('fields.phone') }}" type="text" required wire:model="phone">
                            </div>
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="email">{{ __('fields.email') }} <span class="contact__form--label__star">*</span></label>
                                <input class="contact__form--input" name="email" id="email" placeholder="{{ __('fields.email') }}" type="text" required wire:model="email">
                            </div>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <div class="contact__form--list mb-15">
                                <label class="contact__form--label" for="message">{{ __('fields.message') }} <span class="contact__form--label__star">*</span></label>
                                <textarea class="contact__form--textarea" name="message" id="message" placeholder="{{ __('fields.message') }}" required wire:model="message"></textarea>
                            </div>
                            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <button class="contact__form--btn primary__btn" type="submit"> <span>{{ __('fields.submit') }}</span></button>
                </form>
                @if (session()->has('contact_message'))
                    <span class="text-success mt-5">
                            {{ __('site.' . session('contact_message')) }}
                    </span>
                @endif
            </div>
            <div class="contact__info border-radius-5">
                @if (count($phones) > 0)
                    <div class="contact__info--items">
                        <h3 class="contact__info--content__title text-white mb-15">{{ __('site.contacts') }}</h3>
                        <div class="contact__info--items__inner d-flex">
                            <div class="contact__info--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.568" height="31.128" viewBox="0 0 31.568 31.128">
                                    <path id="ic_phone_forwarded_24px" d="M26.676,16.564l7.892-7.782L26.676,1V5.669H20.362v6.226h6.314Zm3.157,7a18.162,18.162,0,0,1-5.635-.887,1.627,1.627,0,0,0-1.61.374l-3.472,3.424a23.585,23.585,0,0,1-10.4-10.257l3.472-3.44a1.48,1.48,0,0,0,.395-1.556,17.457,17.457,0,0,1-.9-5.556A1.572,1.572,0,0,0,10.1,4.113H4.578A1.572,1.572,0,0,0,3,5.669,26.645,26.645,0,0,0,29.832,32.128a1.572,1.572,0,0,0,1.578-1.556V25.124A1.572,1.572,0,0,0,29.832,23.568Z" transform="translate(-3 -1)" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="contact__info--content">
                                @foreach($phones as $phone)
                                    <p class="contact__info--content__desc text-white">
                                        <a href="tel:{{ $phone['value'] }}">{{ $phone['presentation'] }}</a>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                @if (count($emails) > 0)
                    <div class="contact__info--items">
                        <h3 class="contact__info--content__title text-white mb-15">{{ __('site.email') }}</h3>
                        <div class="contact__info--items__inner d-flex">
                            <div class="contact__info--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.57" height="31.13" viewBox="0 0 31.57 31.13">
                                    <path id="ic_email_24px" d="M30.413,4H5.157C3.421,4,2.016,5.751,2.016,7.891L2,31.239c0,2.14,1.421,3.891,3.157,3.891H30.413c1.736,0,3.157-1.751,3.157-3.891V7.891C33.57,5.751,32.149,4,30.413,4Zm0,7.783L17.785,21.511,5.157,11.783V7.891l12.628,9.728L30.413,7.891Z" transform="translate(-2 -4)" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="contact__info--content">
                                @foreach($emails as $email)
                                    <p class="contact__info--content__desc text-white">
                                        <a href="mailto:{{ $email['value'] }}">{{ $email['presentation'] }}</a>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                @if($address)
                    <div class="contact__info--items">
                        <h3 class="contact__info--content__title text-white mb-15">{{ __('site.address') }}</h3>
                        <div class="contact__info--items__inner d-flex">
                            <div class="contact__info--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.57" height="31.13" viewBox="0 0 31.57 31.13">
                                    <path id="ic_account_balance_24px" d="M5.323,14.341V24.718h4.985V14.341Zm9.969,0V24.718h4.985V14.341ZM2,32.13H33.57V27.683H2ZM25.262,14.341V24.718h4.985V14.341ZM17.785,1,2,8.412v2.965H33.57V8.412Z" transform="translate(-2 -1)" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="contact__info--content">
                                <p class="contact__info--content__desc text-white">
                                    {{ $address }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if(count($socialNetworks) > 0)
                    <div class="contact__info--items">
                        <h3 class="contact__info--content__title text-white mb-15">{{ __('site.follow_us') }}</h3>
                        <ul class="contact__info--social d-flex">
                            @foreach($socialNetworks as $socialNetwork)
                                <li class="contact__info--social__list">
                                    <a class="contact__info--social__icon" target="_blank" href="{{ $socialNetwork['url'] }}">
                                        <img src="{{ asset($socialNetwork['image']) }}" alt="{{ $socialNetwork['name'] }}">
                                        <span class="visually-hidden">{{ $socialNetwork['name'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- End contact section -->
