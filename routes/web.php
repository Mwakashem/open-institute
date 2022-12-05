<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaveRequestController;
use App\Http\Controllers\UsernotificationsController;
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
Route::get('/documentation', function () {
    return view('documentation.index');
});
Route::get('/profile', function () {
    return view('users.profile');
})->name('profile');

Route::get('redirect/{driver}', [UserController::class, 'redirectToProvider'])->name('sociallogin');
Route::post('{driver}/google', [UserController::class, 'handleProviderCallbacksss'])->name('sociallogin-sss');
Route::get('{driver}/callback', [UserController::class, 'handleProviderCallback'])->name('sociallogincallback'); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
  

    Route::get('/dashboard', [LeaveRequestController::class, 'index'])->name('dashboard');
    Route::get('/notifications', [UsernotificationsController::class, 'index'])->name('notifications');
    Route::get('/notifications/clear', [UsernotificationsController::class, 'clear'])->name('clear');

   
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/create/user', [UserController::class, 'create'])->name('users.create')->middleware('role:admin');
    Route::post('/create/store', [UserController::class, 'store'])->name('users.store')->middleware('role:admin');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('role:admin');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('role:admin');
    Route::put('/users/roles/{user}', [UserController::class, 'updateRole'])->name('users.roles.update')->middleware('role:admin');
    Route::put('/users/{user}', [UserController::class, 'updateuser'])->name('users.update');
    Route::get('/change-password', [UserController::class, 'changePassword'])->name('change.password');
    Route::post('/change-password', [UserController::class, 'updatePassword'])->name('update-password');


    Route::get('/leaves', [LeaveRequestController::class, 'index'])->name('leaves.index');
    Route::get('/leaves/create', [LeaveRequestController::class, 'create'])->name('leaves.create'); 
    Route::post('/leaves', [LeaveRequestController::class, 'store'])->name('leaves.store');
   
    Route::get('/leaves/view/{leaveRequest}', [LeaveRequestController::class, 'show'])->name('leaves.view');

    Route::put('/leaves/{leaveRequest}/approve', [LeaveRequestController::class, 'update'])->name('leaves.update')->middleware('role:admin');
    Route::delete('/leaves/{leaveRequest}', [LeaveRequestController::class, 'destroy'])->name('leaves.delete')->middleware('role:admin');






});
