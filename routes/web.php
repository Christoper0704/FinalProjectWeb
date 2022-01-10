<?php

use App\Http\Controllers\HomeController;
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

Route::get('/insert', function () {
    $stuRef = app('firebase.firestore')->database()->collection('Vtuber')->newDocument();
    $stuRef->set([
        'firstname' => 'A',
        'lastname' => 'B',
        'ras' => 'C'
]);
});


Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user','fireauth');

Route::get('users/index', [LogoutController::class, 'index'])->name('users.index');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');