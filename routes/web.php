<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisCredentialsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Dashboard\Doctor\OverviewDoctorController;
use App\Http\Controllers\Dashboard\Doctor\DrugInformationController;
use App\Http\Controllers\Dashboard\Patient\OverviewPatientController;
use App\Http\Controllers\Dashboard\Doctor\CheckupInformationController;
use App\Http\Controllers\Dashboard\Patient\CheckupHistoryController;
use App\Http\Controllers\Dashboard\Patient\CheckupRegisController;

Route::get('/', function () {
    return redirect()->route('login.create');
});

Route::prefix('auth')->group(function () {
    Route::resource('register', RegisCredentialsController::class)->only(['create']);
    Route::resource('login', AuthenticatedSessionController::class)->only(['create']);
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('login.destroy');
});

Route::prefix('dashboard')->group(function () {
    Route::prefix('doctor')->group(function () {
        Route::get('', [OverviewDoctorController::class, 'index'])->name('dashboard.doctor.overview');
        Route::get('periksa', [CheckupInformationController::class, 'index'])->name('dashboard.doctor.periksa');
        Route::get('obat', [DrugInformationController::class, 'index'])->name('dashboard.doctor.obat');
        Route::resource('obat', DrugInformationController::class)->only(['store', 'update', 'destroy']);
    });
    Route::prefix('patient')->group(function () {
        Route::get('', [OverviewPatientController::class, 'index'])->name('dashboard.patient.overview');
        Route::get('periksa', [CheckupRegisController::class, 'index'])->name('dashboard.patient.periksa');
        Route::get('riwayat', [CheckupHistoryController::class, 'index'])->name('dashboard.patient.riwayat');
        // Route::resource('obat', DrugInformationController::class)->only(['store', 'update', 'destroy']);
    });
});
