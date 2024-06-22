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

        if (Route::currentRouteName() === 'home') {
            $page = Page::query()
                ->where('name', Route::currentRouteName())
                ->first();

            if ($page) {
                $description = $page->description;
            }

            return view('layouts.app', [
                'title' => $title,
                'description' => $description,
            ]);
        }

        $page = Page::query()
            ->where('name', Route::currentRouteName())
            ->first();

        if ($page) {
            $title = $title . '-' . $page->title;
            $description = $page->description;
        }

        return view('layouts.app', [
            'title' => $title,
            'description' => $description,
        ]);
    }
}
