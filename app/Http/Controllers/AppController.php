<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Category\GetCategoryRequest;
use App\Http\Requests\Service\GetServiceRequest;
use Illuminate\View\View;

class AppController extends Controller
{
    public function getHome(): View
    {
        return view('pages.home');
    }

    public function getFaq(): View
    {
        return view('pages.faq');
    }

    public function getPolicyPersonalData(): View
    {
        return view('pages.policy-personal-data');
    }

    public function getAbout(): View
    {
        return view('pages.about');
    }

    public function getBankDetails(): View
    {
        return view('pages.bank-details');
    }

    public function getPolicyCookies(): View
    {
        return view('pages.policy-cookies');
    }

    public function getContacts(): View
    {
        return view('pages.contacts');
    }

    public function getService(GetServiceRequest $request): View
    {
        return view('pages.service-detail', [
            'slug' => $request->toData()->slug,
        ]);
    }

    public function getCategory(GetCategoryRequest $request): View
    {
        return view('pages.category-detail', [
            'slug' => $request->toData()->slug,
        ]);
    }
}
