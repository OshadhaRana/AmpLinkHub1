<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\BatteryReplacementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgetPasswordManager;
use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthManager::class, 'login']) ->name('login');
Route::post('/login', [AuthManager::class, 'loginPost']) ->name('login.post');
Route::get('/logout', [AuthManager::class, 'logout']) ->name('logout');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/Services', function () {
    return view('product');
})->name('product');

Route::get('/Admin', function () {
    return view('admin');
})->name('admin');

//Route::get('', [AuthManager::class, 'showProfile'])->name('showProfile');


Route::post('/createuser', [AuthManager::class, 'createuserPost'])->name('createuser.post');

Route::get('/createuser', [AuthManager::class, 'createuser'])->name('createuser');

Route::get('/viewuser', [AuthManager::class, 'showAdminUsers']) ->name('admin.users');




// Route for editing a user
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');

// Route for updating a user (this route handles form submissions for editing)
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');

// Route for deleting a user
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');


Route::get('/forget-password', [ForgetPasswordManager::class, 'forgetpassword']) ->name('forget.password');
Route::post('/forget-password', [ForgetPasswordManager::class, 'forgetpasswordpost']) ->name('forget.password.post');

Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetpassword']) ->name('reset.password');

Route::post('/reset-password',[ForgetPasswordManager::class, 'resetpasswordpost'])
    ->name('reset.password.post');




Route::get('/viewusertoadmin', [AuthManager::class, 'viewusertoadmin']) ->name('viewusertoadmin');

Route::middleware(['auth'])->get('/battery/percentage', [BatteryReplacementController::class, 'getBatteryPercentage']) ->name('getBatteryPercentage');



Route::get('/customers', [UserController::class, 'index'])->name('customers.index')->name('viewcustomer');

Route::get('/products', [ProductController::class, 'index'])->name('viewproducts');




Route::get('/product', [ProductController::class, 'index1'])->name('products.index');           // List all products
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');   // Show form to create a product
Route::post('/products', [ProductController::class, 'store'])->name('products.store');          // Store a new product
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');    // Show a single product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Show form to edit a product
Route::post('/products/{product}', [ProductController::class, 'update'])->name('products.update'); // Update a product
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); // Delete a product
