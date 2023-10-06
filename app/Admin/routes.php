<?php


Route::post('/settings', '\App\Http\Controllers\SettingController@save')->name('saveSetting');

Route::get('/seo_export', '\App\Http\Controllers\SeoController@export')->name('seo.export');
