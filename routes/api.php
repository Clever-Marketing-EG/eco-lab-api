<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MetaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the 'api' middleware group. Enjoy building your API!
|
*/

Route::apiResource( 'products', ProductController::class );

/*
|--------------------------------------------------------------------------
| Meta Routes
|--------------------------------------------------------------------------
*/
Route::apiResource( 'meta', MetaController::class )->except(['store', 'destroy']);
Route::get('dashboard/meta',[MetaController::class, 'fullIndex']);



/*
|--------------------------------------------------------------------------
| Members Routes
|--------------------------------------------------------------------------
*/

Route::apiResource( 'members', MemberController::class );
