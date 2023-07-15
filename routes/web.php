<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('1_MainPage');
});

Route::get('/landing-page', function () {
    return view('2_LandingPage');
});

Route::get('/crm-goup', function () {
    return view('3_CrmGroup');
});

Route::get('/line-details', function () {
    return view('4_LineDetails');
});

Route::get('/activation', function () {
    return view('5_Activation');
});

Route::get('/device-order-stock', function () {
    return view('6_DeviceOrderStock');
});

Route::get('/credit-risk-assesment', function () {
    return view('7_CreditRiskAssesment');
});

Route::get('/order-processing-update', function () {
    return view('8_OrderProcessingUpdate');
});
