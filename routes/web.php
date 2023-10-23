<?php

use App\Http\Controllers\addUser;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CardPaginationController;
use App\Http\Controllers\testController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ShareButtonsController;
// use App\Http\Controllers\EvenementController;
use App\Http\Controllers\FullCalenderController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prof', [HomeController::class, 'index']);
Route::get('/profv',[HomeController::class,'afficheprofilvisiteur']);

Auth::routes();

Route::get('/formulaire', function () {
    return view('formulaire');
});
Route::get('/formulaire', [FormController::class, 'showForm']);
Route::post('/submit-form', [FormController::class, 'submitForm']);
Route::post('formulaire', 'FormController@submitForm')->name('formulaire');

//details
Route::get('/cartvisiteur', [CardPaginationController::class, 'index'])->name('event.details');
Route::get('details/{Eventname}', [testController::class, 'show']);

Route::get('detailsv/{Eventname}', [testController::class, 'detailsv']);

//register login 

//Normal Users Routes List

Route::prefix('home')->group(function () {
    Route::get('', [CardPaginationController::class, 'viewEvent']);

});

// Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
Route::prefix('admin/home')->group(function () {
    Route::get('', [adminController::class, 'index']);
    Route::get('save',[adminController::class,'save']);
    Route::get('aff',[adminController::class,'aff']);
    Route::get('editU/{id}', [adminController::class, 'editU']);
    Route::post('updateU', [adminController::class, 'updateU']);
});

Route::prefix('creator/home')->group(function () {
    Route::get('', [EventController::class, 'index']);
    Route::get('ajouter', [EventController::class, 'ajouter']);
    Route::post('save', [EventController::class, 'save']);
    Route::get('edit/{idE}', [EventController::class, 'edit']);
    Route::post('update', [EventController::class, 'update']);

});



///pp
Route::get('/view', [testController::class, 'view']);
//routelogin button
Route::get('aj', [EventController::class, 'createevent']);

///route login register

Route::get('addU', [addUser::class, 'addUs']);
Route::post('save', [addUser::class, 'save']);

//route share
Route::get('/post',[testController::class,' share']);


//route calendar
//calender 
Route::controller(FullCalenderController::class)->group(function(){
    Route::get('fullcalender', 'index');
    Route::post('fullcalenderAjax', 'ajax');
});

// Route::get('/events',[EventtController::class,'index']);
Route::get('/addeventurl',[FullCalenderController::class,'display']);
Route::post('store',[FullCalenderController::class,'store']);

Route::get('/displaydata',[FullcalenderController::class,'show']);
Route::get('/edit/{id}',[FullCalenderController::class,'edit']);
Route::post('update',[FullCalenderController::class,'update']);