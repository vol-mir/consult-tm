<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Models\Page;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public function render(): View
    {
        $title = config('app.name');
        $description = config('app.name');
        $keywords = null;

        $page = Page::query()
            ->where('name', Route::currentRouteName())
            ->first();

        if ($page) {
            $description = $page->description;
            $keywords = $page->keywords;
        }

        if ($page && Route::currentRouteName() !== 'home') {
            $title = $title . '-' . $page->title;
        }

        if ($page && Route::currentRouteName() === 'home') {
            $title = $title . '-юридические услуги по всей Беларуси';
        }

        return view('layouts.app', [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
        ]);
    }
}
