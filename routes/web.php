<?php

use Illuminate\Support\Facades\Route;
use Spatie\RouteDiscovery\Discovery\Discover;

Route::get('/', fn () => view('welcome'));

Discover::controllers()->in(app_path('Http/Controllers/Discovery'));

Route::prefix('my-prefix')->group(function () {
    Discover::views()->in(resource_path('views/discovery'));
});
