<ul class="{{ $ulClass }}">
    @foreach ($categories as $category)
        <li class="categories__menu--items">
            <a class="categories__menu--link" href="{{ route('category', $category['slug']) }}" title="{{ $category['name'] }}">
                {{ $category['name'] }}
            </a>
        </li>
    @endforeach
</ul>
