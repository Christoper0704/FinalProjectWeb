<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\RestaurantProfile;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inputdata', function () { 
    return view('inputdata');
});

Route::get('/updateprofile/{id}', 'UpdateDataController@index');
// Route::get('/updateprofile', function () { 
//     return view('updateprofile');
// });

Route::get('/login', function () { 
    return view('login');
});

// Route::get('/logout', 'Auth\LoginController@logout');

Route::get('add-data',[InputController::class,'create'])->name('add-data');
Route::post('add-data',[InputController::class,'store'])->name('add-data');

Route::post('update-data',[UpdateDataController::class,'update'])->name('update-data');

Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

// Route::get('/insert', function () {
//     $stuRef = app('firebase.firestore')->database()->collection('Vtuber')->newDocument();
//     $stuRef->set([
//         'firstname' => 'A',
//         'lastname' => 'B',
//         'ras' => 'C'
// ]);
// });

//Route::get('users/index', [LogoutController::class, 'index'])->name('users.index');
//Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
// Route::group(['middleware' => ['auth']], function() {
//     /**
//     * Logout Route
//     */
//     Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
//  });

Route::post('upload', [App\Http\Controllers\UploadController::class,'proses_upload'])->name('upload');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::resource('/home/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('user','fireauth');

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);

Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');

Route::get('/profilerestaurant',[App\Http\Controllers\RestaurantProfileController::class, 'show'])->name('profilerestaurant');

Route::get('/booking',[App\Http\Controllers\BookingController::class, 'show'])->name('booking');

Route::get('/accept/{id}', [App\Http\Controllers\BookingController::class, 'accept'])->name('accept');
Route::get('/cancel/{id}', [App\Http\Controllers\BookingController::class, 'cancel'])->name('cancel');