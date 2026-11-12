<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\DiamondController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');

        // Existing gemstone certificates
        Route::get('/certificates', [CertificateController::class, 'index'])
            ->name('certificates.index');

        Route::get('/certificates/create', [CertificateController::class, 'create'])
            ->name('certificates.create');

        Route::post('/certificates', [CertificateController::class, 'store'])
            ->name('certificates.store');

        // Gemstone certificate management
        Route::get('/certificates/{certificate}/edit', [CertificateController::class, 'edit'])
            ->name('certificates.edit');

        Route::put('/certificates/{certificate}', [CertificateController::class, 'update'])
            ->name('certificates.update');

        Route::delete('/certificates/{certificate}', [CertificateController::class, 'destroy'])
            ->name('certificates.destroy');

        Route::post('/certificates/{id}/restore', [CertificateController::class, 'restore'])
            ->name('certificates.restore');

        // Diamond certificate management
        Route::get('/diamonds/{diamond}/edit', [DiamondController::class, 'edit'])
            ->name('diamonds.edit');

        Route::put('/diamonds/{diamond}', [DiamondController::class, 'update'])
            ->name('diamonds.update');

        Route::delete('/diamonds/{diamond}', [DiamondController::class, 'destroy'])
            ->name('diamonds.destroy');

        Route::post('/diamonds/{id}/restore', [DiamondController::class, 'restore'])
            ->name('diamonds.restore');

        // New diamond certificate saving route
        Route::post('/diamonds', [DiamondController::class, 'store'])
            ->name('diamonds.store');

        // Diamond certificate print routes
        Route::get('/diamonds/{diamond}/print/front', [DiamondController::class, 'printFront'])
            ->name('diamonds.print.front');

        Route::get('/diamonds/{diamond}/print/back', [DiamondController::class, 'printBack'])
            ->name('diamonds.print.back');

        // Existing gemstone print routes
        Route::get(
            '/certificates/{certificate}/print/front',
            [CertificateController::class, 'printFront']
        )->name('certificates.print.front');

        Route::get(
            '/{certificate}/back',
            [CertificateController::class, 'printBack']
        )->name('sections.back');

        Route::get(
            '/certificates/{certificate}/print/white/front',
            [CertificateController::class, 'printWhiteFront']
        )->name('certificates.print.white.front');

        Route::get(
            '/certificates/{certificate}/print/white/back',
            [CertificateController::class, 'printWhiteBack']
        )->name('certificates.print.white.back');
    });
});

// Existing public gemstone verification route
Route::get('/verify/{publicId}', [CertificateController::class, 'verify'])
    ->whereUuid('publicId')
    ->name('certificate.verify');
// Public diamond certificate verification
Route::get('/verify/diamond/{publicId}', [DiamondController::class, 'verify'])
    ->whereUuid('publicId')
    ->name('diamond.verify');

