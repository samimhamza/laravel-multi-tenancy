<?php

use Illuminate\Support\Facades\Route;




foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // put your central domains api routes in here
    });
}
