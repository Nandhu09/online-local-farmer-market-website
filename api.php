<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('signup', [FarmerController::class, 'signup']);
Route::post('adminloginpost', [AdminController::class, 'adminloginpost']);
Route::post('registerpro', [ProviderController::class, 'registerpro']);
Route::post('loginpro', [ProviderController::class, 'providerloginpost']);
Route::get('showprovider', [AdminController::class, 'showprovider']);

Route::put('/approve/{id}', [AdminController::class,'provider_approval']);
Route::get('/providerprofile/{uname}', [ProviderController::class,'providerprofile']);
Route::post('addvehiclepost', [ProviderController::class, 'addvehiclepost']);
Route::get('vehicles/{uname}', [ProviderController::class, 'vehicles']);
Route::post('loginfarmer', [FarmerController::class, 'loginfarmer']);
Route::get('allvehicles', [FarmerController::class, 'allvehicles']);
Route::post('search-vehicles', [FarmerController::class, 'searchvehicles']);
Route::get('providers/{id}', [FarmerController::class, 'providerlist']);
Route::post('bookingpost', [FarmerController::class, 'bookingpost']);
Route::get('status/{uname}', [FarmerController::class, 'status']);
Route::get('requests1/{id}', [ProviderController::class, 'requests']);
Route::post('/pro_request', [ProviderController::class, 'proRequest']);
Route::post('/payment', [FarmerController::class, 'payment']);
Route::post('registercus', [UserController::class, 'registercus']);
Route::get('/farmerprofile1/{uname}', [FarmerController::class,'farmerprofile1']);
Route::post('addproductpost', [FarmerController::class, 'addproductpost']);
Route::get('products/{uname}', [FarmerController::class, 'products']);

Route::get('products1/{uname}', [FarmerController::class, 'products1']);
Route::get('allproducts', [UserController::class, 'allproducts']);
Route::post('customerloginpost', [UserController::class, 'customerloginpost']);
Route::post('search-products', [UserController::class, 'searchproducts']);

Route::get('/productss/{fid}', [UserController::class, 'productlist']);
Route::post('productbookingpost', [UserController::class, 'productbookingpost']);
Route::get('/bookings/{uname}', [FarmerController::class, 'bookings']);
Route::get('/mybookings/{uname}', [UserController::class, 'mybookings']);
Route::post('/productpayment', [UserController::class, 'productpayment']);
Route::put('delivery_request/{id}', [FarmerController::class, 'delivery_request']);
Route::post('/agriservices', [AdminController::class, 'agriservices']);
Route::get('showservice', [ProviderController::class, 'showservice']);
Route::post('applyservicepost', [ProviderController::class, 'applyservicepost']);
Route::get('allbookservices', [AdminController::class, 'allbookservices']);
Route::put('/serapprove/{id}', [AdminController::class,'serapprove']);
Route::get('allbookservices1', [UserController::class, 'allbookservices1']);
Route::get('serviceproviders/{servicepro}', [UserController::class, 'providerlist1']);
Route::post('servbookingpost', [UserController::class, 'servbookingpost']);
Route::get('/showmyservice/{storedUname}', [ProviderController::class, 'showmyservice']);
Route::delete('/delete/{id}', [ProviderController::class, 'deleteservice']);
Route::put('updateproductpost/{id}', [FarmerController::class, 'updateproductpost']);
Route::get('myagriservices/{uname}', [ProviderController::class, 'myagriservices']);
Route::get('/genbill/{id}', [ProviderController::class,'genbill']);
Route::put('genratebill-farmer', [ProviderController::class, 'genratebillfarmer']);
Route::get('cusagriservices/{uname}', [UserController::class, 'cusagriservices']);
Route::post('/Customerpaid', [UserController::class, 'Customerpaid']);
Route::post('farservbookingpost', [FarmerController::class, 'farservbookingpost']);
Route::get('faragriservices/{uname}', [FarmerController::class, 'faragriservices']);
Route::get('myfaragriservices/{uname}', [ProviderController::class, 'myfaragriservices']);
Route::get('/fargenbill/{id}', [ProviderController::class,'fargenbill']);
Route::put('fargenratebill-farmer', [ProviderController::class, 'fargenratebill']);
Route::post('/Farmerpaid', [FarmerController::class, 'Farmerpaid']);
Route::post('addlivestockpost', [ProviderController::class, 'addlivestockpost']);
Route::get('allstocks', [ProviderController::class, 'allstocks']);
Route::delete('/delete_request/{id}', [FarmerController::class, 'deleteProduct']);
Route::get('allvehicles/{uname}', [ProviderController::class, 'myvehicles']);
Route::delete('/vechdelete_request/{id}', [ProviderController::class, 'deleteVechicle']);
Route::get('paidvehicles/{uname}', [ProviderController::class, 'paidvehicles']);
Route::get('livestocksproviders/{id}', [FarmerController::class, 'livestockproviderlist']);
Route::post('livestockbookingpost', [FarmerController::class, 'livestockbookingpost']);
Route::get('farbooklivestocks/{uname}', [ProviderController::class, 'farbooklivestocks']);
Route::get('cusbooklivestocks/{uname}', [ProviderController::class, 'cusbooklivestocks']);
Route::get('farlivestocksbooking/{uname}', [FarmerController::class, 'farlivestocksbooking']);
Route::post('farlivestockpaidbill_post', [FarmerController::class, 'farlivestockpaidbill_post']);
Route::get('admin-view-vehicle/{id}', [AdminController::class, 'adminviewvehiclelist']);
Route::get('cuslivestocksbooking/{uname}', [UserController::class, 'cuslivestocksbooking']);
Route::post('cuslivestockpaidbill_post', [UserController::class, 'cuslivestockpaidbill_post']);












