<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class,'index' ]);

