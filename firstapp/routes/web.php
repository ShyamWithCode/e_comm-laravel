<?php
 use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::view('/',"login");

 Route::view('jewelery',"jewelery");

//  Route::view('what_new',"what_new");

 Route::get('/what_new', [ProductController::class, 'index']);

Route::get('/jewelery', [ProductController::class, 'index']);

Route::post('add_to_cart',[ProductController::class,'addtoCart']);
