<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocureFrontendPageController;


/**
 * Frontend Routes 
 */
Route::get('/', [ DocureFrontendPageController::class, 'showHomePage' ]);
Route::get('login', [ DocureFrontendPageController::class, 'showLoginPage' ]);

// Patiens Routes
Route::get('patient/register', [ DocureFrontendPageController::class, 'showPatientRegPage' ]);
Route::get('patient/dashboard', [ DocureFrontendPageController::class, 'showPatiendDashboard' ]);

// Doctors routes
Route::get('doctor/register', [ DocureFrontendPageController::class, 'showDoctorRegPage' ]);
Route::get('doctor/dashboard', [ DocureFrontendPageController::class, 'showDoctorDashboard' ]);