<!-- Start brand section -->
<div class="brand__section brand__section--style3 section--padding section--margin-bottom">
    <div class="container">
        <div class="brand__section--inner__style3 brands__swiper--activation swiper">
            <div class="swiper-wrapper">
                @foreach ($brands as $brand)
                    <div class="swiper-slide">
                        <div class="brang__logo--items">
                            <img class="brang__logo--img" src="{{ $brand['image'] }}" alt="{{ $brand['description'] ?? $brand['name'] }}">
                        </div>
                    </div>
                @endforeach
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
<!-- End brand section -->
