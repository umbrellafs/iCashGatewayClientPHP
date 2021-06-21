<?php

use Illuminate\Support\Facades\Route;

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

Route::get('Login','GWController@Login');
Route::get('GetBalance','GWController@GetBalance');
Route::get('GetStatement','GWController@GetStatement');
Route::get('TransferMoney','GWController@TransferMoney');
Route::get('GeneratePaymentCode','GWController@GeneratePaymentCode');
Route::get('ValidateVoucher','GWController@ValidateVoucher');
Route::get('RedeemVoucher','GWController@RedeemVoucher');
Route::get('PayInvoice','GWController@PayInvoice');
Route::get('GetiCashCardNetworkNumber','GWController@GetiCashCardNetworkNumber');
Route::get('CanCustomerPurchase','GWController@CanCustomerPurchase');
Route::get('GeneratePaymentQR','GWController@GeneratePaymentQR');
Route::get('SetNewPIN','GWController@SetNewPIN');
