<ul class="social__share {{ $place === 'footer' ? 'footer__social' : 'header__social' }} d-flex">
    @foreach ($socialNetworks as $socialNetwork)
        <li class="social__share--list">
            <a class="{{ $place === 'footer' ? 'social__share--icon__style2' : 'social__share--icon' }}" target="_blank" href="{{ $socialNetwork['url'] }}">
                <img src="{{ asset($socialNetwork['image']) }}" alt="{{ $socialNetwork['name'] }}">
                <span class="visually-hidden">{{ $socialNetwork['name'] }}</span>
            </a>
        </li>
    @endforeach
</ul>
