<?php

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


Route::get('/', 'Customer\HomeController@index')->name('home');

Route::get('about','Customer\HomeController@about')->name('about');
Route::get('galleries','Customer\HomeController@galleries')->name('galleries');
Route::get('contact','Customer\HomeController@contact')->name('contact');
Route::get('projects','Customer\HomeController@projects')->name('projects');
Route::post('contact/store','Customer\HomeController@contact_store')->name('contact.store');
Route::get('estimates', 'Customer\HomeController@estimates')->name('estimates');
Route::post('estimate/store','Customer\HomeController@estimateStore')->name('estimate.store');
Auth::routes(['verify' => true]);
Auth::routes();

Route::resource('shop', 'Customer\ProductController', ['only' => ['index', 'show']]);

Route::post('cart/checkout','Customer\CartController@checkout')->name('checkout');
Route::resource('cart', 'Customer\CartController');


Route::post('emptyCart','Customer\CartController@emptyCart')->name('emptyCart');


Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::namespace('Customer')->name('customer.')->middleware(['customer', 'auth'])->group(function () { 
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('profile','HomeController@profile')->name('profile');
});


Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware(['admin', 'auth'])->group(function () {
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    Route::get('/reports', 'AdminController@reports')->name('reports.index');
    Route::get('reports/generate','AdminController@report_filter')->name('report.filter');
    Route::resource('/estimates', 'EstimateController');
    // customers
    Route::get('employees','CustomerController@employees')->name('customers.employees');
    Route::put('user/archive/{user}','CustomerController@archive')->name('customers.archive');
    Route::resource('/customers', 'CustomerController');
    // products
    Route::put('product/archive/{user}','EquipmentController@archive')->name('products.archive');
    Route::resource('/products', 'EquipmentController');
    // archive
    Route::get('archive/products','ArchiveController@products')->name('archive.products');
    Route::get('archive/customers','ArchiveController@customers')->name('archive.customers');
    Route::get('archive/employees','ArchiveController@employees')->name('archive.employees');
    
    Route::get('histories','HistoryController@index')->name('histories.index');

    Route::put('order/{id}/approve','OrderController@approveOrder')->name('order.approve');
    Route::resource('orders','OrderController');


    Route::get('backup', 'BackupController@index')->name('backup.index');
    Route::get('backup/create', 'BackupController@create')->name('backup.create');
    Route::get('backup/download/{file_name}', 'BackupController@download')->name('backup.download');
    Route::get('backup/delete/{file_name}', 'BackupController@delete')->name('backup.delete');
    Route::get('backup/importDB','BackupController@importDB')->name('backup.importdb');
    Route::post('backup/import/','BackupController@ImportDatabase')->name('backup.import');
    
});

