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

                                        @switch($socialNetwork['slug'])
                                            @case('facebook')
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                @break

                                            @case('twitter')
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                    <path data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                @break

                                            @case('viber')
                                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="17.497" height="17.492">
                                                    <path d="M15.684,45.961c-0.193,0-0.388-0.035-0.576-0.106c-0.626-0.239-1.039-0.839-1.039-1.509v-4.946 c-2.322-0.695-4.507-1.686-5.918-2.952c-2.802-2.826-4.075-6.785-4.075-12.524v-3.23c0-5.739,1.273-9.698,4.006-12.457 C12.791,4,21.228,4,24,4s11.208,0,15.848,4.172c2.801,2.823,4.074,6.781,4.074,12.522l0.001,3.23c0,5.739-1.273,9.698-4.006,12.457 c-4.709,4.236-13.146,4.236-15.918,4.236c-0.663,0-1.395,0-2.642-0.063c-1.306,1.461-4.468,4.868-4.468,4.868 C16.576,45.772,16.135,45.961,15.684,45.961z M32.451,29.854c-1.111-0.936-1.624-1.219-3.158-2.14 C28.654,27.331,27.68,27,27.169,27c-0.349,0-0.767,0.267-1.023,0.523C25.49,28.179,25.275,29,24.125,29 c-1.125,0-3.09-1.145-4.5-2.625C18.145,24.965,17,23,17,21.875c0-1.15,0.806-1.38,1.462-2.037C18.718,19.583,19,19.165,19,18.816 c0-0.511-0.331-1.47-0.714-2.109c-0.921-1.535-1.203-2.048-2.14-3.158c-0.317-0.376-0.678-0.548-1.056-0.549 c-0.639-0.001-1.478,0.316-2.046,0.739c-0.854,0.637-1.747,1.504-1.986,2.584c-0.032,0.147-0.051,0.295-0.057,0.443 c-0.046,1.125,0.396,2.267,0.873,3.234c1.123,2.279,2.609,4.485,4.226,6.455c0.517,0.63,1.08,1.216,1.663,1.782 c0.566,0.582,1.152,1.145,1.782,1.663c1.97,1.617,4.176,3.103,6.455,4.226c0.958,0.472,2.086,0.906,3.2,0.874 c0.159-0.005,0.318-0.023,0.477-0.058c1.08-0.238,1.947-1.132,2.584-1.986c0.423-0.568,0.74-1.406,0.739-2.046 C32.999,30.532,32.827,30.171,32.451,29.854z M36,22v-1c0-6.065-4.935-11-11-11c-0.552,0-1,0.448-1,1s0.448,1,1,1 c4.962,0,9,4.038,9,9v1c0,0.552,0.448,1,1,1S36,22.552,36,22z M29.111,20.967c0.534-0.14,0.854-0.685,0.715-1.22 c-0.457-1.752-1.827-3.121-3.575-3.574c-0.537-0.137-1.081,0.184-1.219,0.718c-0.138,0.535,0.183,1.08,0.718,1.219 c1.047,0.27,1.867,1.091,2.141,2.142C28.008,20.702,28.414,21,28.858,21C28.941,21,29.026,20.989,29.111,20.967z M33,21 c0-4.252-3.326-7.759-7.573-7.983c-0.543-0.03-1.022,0.394-1.051,0.946c-0.029,0.551,0.394,1.022,0.946,1.051 C28.506,15.182,31,17.812,31,21c0,0.552,0.448,1,1,1C32.552,22,33,21.552,33,21z" fill="currentColor"/>
                                                </svg>
                                                @break

                                            @case('instagram')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                    <path data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                @break

                                            @case('youtube')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                    <path data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                </svg>
                                                @break

                                            @case('telegram')
                                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="17.497" height="17.492">
                                                    <path d="M5.83,23.616c12.568-5.529,28.832-12.27,31.077-13.203c5.889-2.442,7.696-1.974,6.795,3.434 c-0.647,3.887-2.514,16.756-4.002,24.766c-0.883,4.75-2.864,5.313-5.979,3.258c-1.498-0.989-9.059-5.989-10.7-7.163 c-1.498-1.07-3.564-2.357-0.973-4.892c0.922-0.903,6.966-6.674,11.675-11.166c0.617-0.59-0.158-1.559-0.87-1.086 c-6.347,4.209-15.147,10.051-16.267,10.812c-1.692,1.149-3.317,1.676-6.234,0.838c-2.204-0.633-4.357-1.388-5.195-1.676 C1.93,26.43,2.696,24.995,5.83,23.616z" fill="currentColor"/>
                                                </svg>
                                                @break

                                            @case('whatsapp')
                                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="17.497" height="17.492">
                                                    <path d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z" fill="currentColor"/>
                                                </svg>
                                                @break

                                            @default
                                                <img src="{{ asset($socialNetwork['image']) }}" alt="{{ $socialNetwork['name'] }}">
                                        @endswitch
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
