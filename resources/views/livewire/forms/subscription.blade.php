<form class="newsletter__subscribe--form" wire:submit.prevent="save">
    <div class="row">
        <div class="col-12 newsletter__col">
            <label>
                <input class="newsletter__subscribe--input" placeholder="{{ __('site.email') }}" type="email" required wire:model="email">
            </label>
            <button class="newsletter__subscribe--button btn__subscription" type="submit">{{ __('site.subscribe') }}</button>
        </div>
        <div class="col-12">
            <label class="newsletter__subscribe--agreement">
                <input class="newsletter__subscribe--checkbox" type="checkbox" required>
                {{ __('site.agreement') }}  <nobr>&quot;<a target="_blank" href="{{ route('policy_personal_data') }}">{{ __('site.policy_personal_data') }}</a>&quot;</nobr>
            </label>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            @if (session()->has('subscription_message'))
                <span class="text-success">
                    {{ __('site.' . session('subscription_message')) }}
                </span>
            @endif
        </div>
    </div>
</form>
