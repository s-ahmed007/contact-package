<?php

use Illuminate\Support\Facades\Route;
use Sohel\Contact\Http\Controllers\ContactController;

Route::group(['namespace'=>'Sohel\Contact\Http\Controllers'], function () {
    Route::get('contact', [ContactController::class, 'index'])->name('contact');

    Route::post('contact', [ContactController::class, 'send']);
});
