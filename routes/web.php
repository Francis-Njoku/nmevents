<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('qr-code-g', function () {

    \QrCode::size(500)
        ->format('png')
        ->generate('raviyatechnical', public_path('images/qrcode.png'));

    return view('qrCode');
});
Route::get('/qrcode', [QrCodeController::class, 'index']);
