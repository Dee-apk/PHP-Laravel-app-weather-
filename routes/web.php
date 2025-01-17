<?php

use App\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'showWeather']);
Route::get('/weather', [WeatherController::class, 'showForm'])->name('weather.form');
Route::post('/weather', [WeatherController::class, 'checkWeather'])->name('weather.check');
