<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContactNumberController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PartenrController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\RegisterController;
use App\Http\Controllers\Dashboard\UpdateProfileController;

Route::middleware('auth:admin')->group(function(){

        Route::get('/', function () { return view('welcome'); })->name('home');
        Route::post('admin/{id}/update',[UpdateProfileController::class,'update']);
        Route::post('/logout',[LoginController::class,'logout']);
        Route::resources([
            'admins'=> AdminController::class,
            'abouts'=> AboutUsController::class,
            'phones'=> NumberController::class,
            'socials'=> SocialController::class,
            'services'=>ServiceController::class,
            'projects'=>ProjectController::class,
            'contacts'=>ContactUsController::class,
            'ratings'=>RatingController::class,
            'emails'=>EmailController::class,
            'partenrs'=>PartenrController::class,
            'privacys'=>PrivacyController::class,
            'conditions'=>ConditionController::class,
            'goals'=>GoalController::class,
            "tels"=>PhoneController::class,
            "offers"=> OfferController::class
        ]);

});
Route::middleware('guest:admin')->group(function(){
    Route::post('/login',[LoginController::class,'login']);
    Route::get('/login',[LoginController::class,'create'])->name('login');
});

Route::post('/register',[AdminController::class,'store']);
Route::get('/register_view',[RegisterController::class,'create']);




