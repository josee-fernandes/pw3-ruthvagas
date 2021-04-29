<?php

use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('barquinho', function () {
    return view('balsa');
});

Route::redirect('candidato', 'applicant');

Route::get('applicant', function(){
    return view('applicant');
});

Route::post('applicant', [ApplicantController::class, 'store']);
