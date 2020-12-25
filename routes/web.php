<?php
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Hash;

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
Auth::routes(['verify' => true]);
// dashboard Routes
Route::middleware("auth")->prefix('admin')->group(function () {
    Route::get('/','DashboardController@dashboardEcommerce');
});


Route::get("/test",function () {
    return Hash::make("12345678");
});