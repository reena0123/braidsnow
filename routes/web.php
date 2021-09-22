<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
	return redirect('/login');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']],function () {

	Route::get('dashboard',[DashboardController::class,'index']);

	Route::resources([
    	'cms' => CMSController::class,
    	'services' => ServiceController::class
	]);
    
});
