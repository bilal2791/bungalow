<?php
/////////////----test----------//
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});


// Route::get('/customer', function () {
//     return view('customer');
// });


////////////---------------customer routes------------///////////////////
Route::get('/customer', [App\Http\Controllers\CustomersController::class, 'index'])->name('customer');
Route::get('/customer/create', [App\Http\Controllers\CustomersController::class, 'create'])->name('customer.create');
Route::POST('/customer/store', [App\Http\Controllers\CustomersController::class, 'store'])->name('customer.store');
Route::get('/customer/show/{id}', [App\Http\Controllers\CustomersController::class, 'show'])->name('customer.show');
Route::get('/customer/edit/{id}', [App\Http\Controllers\CustomersController::class, 'edit'])->name('customer.edit');
Route::put('update/{id}', [App\Http\Controllers\CustomersController::class, 'update']);
Route::delete('customer/delete/{id}', [App\Http\Controllers\CustomersController::class, 'destroy'])->name('customer.destroy');
// Route::get('customer/all', [App\Http\Controllers\CustomersController::class, 'getDesignations'])->name('customer.getDesignations');
////////////---------------end customer routes------------///////////////////



Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::POST('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');




////////////---------------Desuignatuion routes------------///////////////////
Route::get('/designation', [App\Http\Controllers\DesignationsController::class, 'index'])->name('designation');
Route::POST('/designation/store', [App\Http\Controllers\DesignationsController::class, 'store'])->name('designation.store');

////////////---------------end Desuignatuion routes------------///////////////////
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/includes.head', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/crm',[App\Http\Controllers\CrmmodelController::class,'index'])->name('crm');
