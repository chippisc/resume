<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\ExampleDataController::class)->group(function () {
    Route::get('/example-data/query', 'fetch')->name('example-data.index');
});
