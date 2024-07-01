<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $mainPhone = null;
        $mainEmail = null;

        $contacts = Contact::query()
            ->get();

        foreach ($contacts as $contact) {
            if ($contact->contactType?->slug === 'phone' && $contact->is_main) {
                $mainPhone = $contact->value;
            }

            if ($contact->contactType?->slug === 'email' && $contact->is_main) {
                $mainEmail = $contact->value;
            }
        }

        $setting = Setting::query()
            ->where('slug', 'main')
            ->first();

        View::share('MAIN_PHONE', $mainPhone);
        View::share('MAIN_EMAIL', $mainEmail);
        View::share('COMPANY', config('app.name'));
        View::share('ADDRESS', $setting?->address);
        View::share('FULL_NAME', $setting?->full_name);
    }
}
