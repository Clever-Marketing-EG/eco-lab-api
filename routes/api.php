<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MetaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;

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
Route::get('dashboard/products/{product}',[ProductController::class, 'showFull']);


/*
|--------------------------------------------------------------------------
| Meta Routes
|--------------------------------------------------------------------------
*/
Route::apiResource( 'meta', MetaController::class )->except(['store', 'destroy']);
Route::get('dashboard/meta',[MetaController::class, ['fullIndex', 'showFull']]);



/*
|--------------------------------------------------------------------------
| Members Routes
|--------------------------------------------------------------------------
*/

Route::apiResource( 'members', MemberController::class );
Route::get('dashboard/members/{member}',[MemberController::class, 'showFull']);


/*
|--------------------------------------------------------------------------
| Certificates Routes
|--------------------------------------------------------------------------
*/

Route::apiResource( 'certificates', CertificateController::class );
Route::get('dashboard/certificates/{certificate}',[CertificateController::class, 'showFull']);

/*
|--------------------------------------------------------------------------
| Mails Routes
|--------------------------------------------------------------------------
*/
Route::post('/mails/contact-us', [MailController::class, 'contactUs']);




/*
|--------------------------------------------------------------------------
| Images Routes
|--------------------------------------------------------------------------
*/
Route::post('/images', [ImagesController::class, 'store'])->name('images.store');



/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('login', [AuthController::class, 'login'])
        ->name('auth.login');

    Route::post('logout', [AuthController::class, 'logout'])
        ->name('auth.logout');

    Route::post('refresh', [AuthController::class, 'refresh'])
        ->name('auth.refresh');

    Route::post('me', [AuthController::class, 'me'])
        ->name('auth.name');

    // Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    //     ->name('password.email');
});


