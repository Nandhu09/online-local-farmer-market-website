<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
Route::controller(AdminController::class)->group(function() {
    Route::get('/login_admin', 'adminlogin')->name('adminlogin');
    Route::get('/admin', 'adminhome')->name('adminhome');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/index', 'index')->name('index');
    Route::get('/ser_add', 'addservices')->name('addservices');
    Route::get('/admin_view_vehicle/{id}', 'adminviewvehicle')->name('adminviewvehicle');

  

    

});
Route::controller(ProviderController::class)->group(function() {
    Route::get('/login_pro', 'providerlogin')->name('providerlogin');
    Route::get('/reg_pro', 'providerregister')->name('providerregister');
    Route::get('/pro_home', 'providerhome')->name('providerhome');
    Route::get('/pro_add', 'addvehicle')->name('addvehicle');
    Route::get('/pro_vehicle', 'vehicleinfo')->name('vehicleinfo');
    Route::get('/pro_request/{bid}', 'pro_request')->name('pro_request');
    Route::get('/pro_history', 'vehicleinfo')->name('pro_history');
    Route::get('/applyservices', 'applyservices')->name('applyservices');
    Route::get('/apply_ser', 'applyser')->name('applyser');
    Route::get('/servicestatus', 'proservicestatus')->name('proservicestatus');
    Route::get('/serviceinfo', 'serviceinfo')->name('serviceinfo');
    Route::get('/service-gen-bill/{id}', 'servicegenbill')->name('servicegenbill');
    Route::get('/serviceinfo1', 'farmerserviceinfo')->name('farmerserviceinfo');
    Route::get('/service-gen-bill1/{id}', 'farmenserbillgen')->name('farmenserbillgen');
    Route::get('/addlivestocks', 'addlivestocks')->name('addlivestocks');
    Route::get('/proviewlivestocks', 'proviewlivestocks')->name('proviewlivestocks');
    Route::get('/updatevehicle', 'updatevehicle')->name('updatevehicle');
    Route::put('/updatevehiclepost', 'updatevehiclepost')->name('updatevehiclepost');
    Route::get('/cuslivestocks', 'cuslivestocks')->name('cuslivestocks');
    Route::get('/farlivestocks', 'farliveStocks')->name('farliveStocks');

    
    
    
    

    
});

Route::controller(FarmerController::class)->group(function() {
    Route::get('/userhome', 'userhome')->name('userhome');
    Route::get('/book/{id}', 'booking')->name('booking');
    
    Route::get('/user_status', 'user_status')->name('user_status');
    Route::get('/user_pay', 'user_pay')->name('user_pay');
    Route::get('/farmerprofile', 'farmerprofile')->name('farmerprofile');
    Route::get('/addproduct', 'addproduct')->name('addproduct');
    Route::get('/productinfo', 'productinfo')->name('productinfo');
    Route::get('/far_apply_serv', 'faraddservices')->name('faraddservices');
    Route::get('/updateproduct', 'updateproducts')->name('updateproducts');
    Route::get('/far_apply_serv', 'faraddservices')->name('faraddservices');
    Route::get('/far_apply_serv1', 'farservicebooking')->name('farservicebooking');
    Route::get('/farserviceinfo', 'farserviceinfo')->name('farserviceinfo');
    Route::get('/far-paid-bill/{id}', 'farpaidbill')->name('farpaidbill');
    Route::get('/farviewlivestocks', 'farviewlivestocks')->name('farviewlivestocks');
    Route::put('/updateproductpost', 'updateproductpost')->name('updateproductpost');
    Route::get('/booklivestocks/{id}', 'bookinglivestocks')->name('bookinglivestocks');
    Route::get('/farlivestockstatus', 'farlivestockstatus')->name('farlivestockstatus');
    Route::get('/far-livestock-paid-bill/{id}', 'farlivestockpaidbill')->name('farlivestockpaidbill');

    

    
    
    
});
Route::controller(UserController::class)->group(function() {
    Route::get('/login_cus', 'customerlogin')->name('customerlogin');
    Route::get('/reg_cus', 'customerregister')->name('customerregister');
    Route::get('/customerhome', 'customerhome')->name('customerhome');
    Route::get('/productbook/{fid}', 'productbook')->name('productbook');
    Route::get('/mybooking', 'mybooking')->name('mybooking');
    Route::get('/productpay', 'productpay')->name('productpay');
    Route::get('/cus_apply_serv', 'cusaddservices')->name('cusaddservices');
    Route::get('/cus_apply_serv1', 'cusservicebooking')->name('cusservicebooking');
    Route::get('/cusserviceinfo', 'cusserviceinfo')->name('cusserviceinfo');
    Route::get('/cus-paid-bill/{id}', 'cuspaidbill')->name('cuspaidbill');
    Route::get('/cusviewlivestocks', 'cusviewlivestocks')->name('cusviewlivestocks');
    Route::get('/cuslivestockstatus', 'cuslivestockstatus')->name('cuslivestockstatus');
    Route::get('/cus-livestock-paid-bill/{id}', 'cuslivestockpaidbill')->name('cuslivestockpaidbill');


    
  
   

    
});

