<?php

declare(strict_types=1);

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::controller(AppController::class)->group(function () {
    Route::get('/', 'getHome')->name('home');
    Route::get('/faq', 'getFaq')->name('faq');
    Route::get('/policy-personal-data', 'getPolicyPersonalData')->name('policy_personal_data');
    Route::get('/about', 'getAbout')->name('about');
    Route::get('/bank-details', 'getBankDetails')->name('bank_details');
    Route::get('/policy-cookies', 'getPolicyCookies')->name('policy_cookies');
    Route::get('/contacts', 'getContacts')->name('contacts');
    Route::get('/services/{slug}', 'getService')->name('service');
    Route::get('/{slug}', 'getCategory')->name('category');
});
