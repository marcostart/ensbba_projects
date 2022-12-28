<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ConditionController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TrainingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\{WelcomeController, EnsbbaController};
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/directrice-welcome', [WelcomeController::class, 'directriceWelcome'])->name('directrice-welcome');
Route::get('/search/{q?}', [WelcomeController::class, 'search'])->name('search');
Route::get('/teacher/{q?}', [WelcomeController::class, 'teacher'])->name('teacher');
Route::get('/mission_defis', [EnsbbaController::class, 'showMission'])->name('mission');
Route::get('/Administration', [EnsbbaController::class, 'showAdmin'])->name('administration');
Route::get('/Formations', [EnsbbaController::class, 'showFormation'])->name('formation');

Route::middleware(['isAdmin'])->group(function () {
    Route::group(["prefix"=>"admin"], function () {
        Route::get('/', [UserController::class, 'allUsers'])->name("index");

        Route::group(["prefix"=>"users","as"=>"users."], function () {
            Route::get('/', [UserController::class, 'allUsers'])->name("index");
            Route::post('/create', [UserController::class, 'create'])->name("create");
            Route::post('/update/{id}', [UserController::class, 'update'])->name("update");
            Route::post('/delete/{id}', [UserController::class, 'delete'])->name("delete");
            Route::get('/new', [UserController::class, 'form'])->name("new");
            Route::get('/edit/{id}', [UserController::class, 'editForm'])->name("edit");
        });

        Route::group(["prefix"=>"partners","as"=>"partners."], function () {
            Route::get('/', [PartnerController::class, 'all'])->name("index");
            Route::post('/create', [PartnerController::class, 'create'])->name("create");
            Route::post('/update/{id}', [PartnerController::class, 'update'])->name("update");
            Route::post('/delete/{id}', [PartnerController::class, 'delete'])->name("delete");
            Route::get('/new', [PartnerController::class, 'form'])->name("new");
            Route::get('/edit/{id}', [PartnerController::class, 'editForm'])->name("edit");
        });

        Route::group(["prefix"=>"articles","as"=>"articles."], function () {
            Route::get('/', [ArticleController::class, 'all'])->name("index");
            Route::post('/create', [ArticleController::class, 'create'])->name("create");
            Route::post('/update/{id}', [ArticleController::class, 'update'])->name("update");
            Route::post('/delete/{id}', [ArticleController::class, 'delete'])->name("delete");
            Route::get('/new', [ArticleController::class, 'form'])->name("new");
            Route::get('/edit/{id}', [ArticleController::class, 'editForm'])->name("edit");
        });

        Route::group(["prefix"=>"sliders","as"=>"sliders."], function () {
            Route::get('/', [SliderController::class, 'all'])->name("index");
            Route::post('/create', [SliderController::class, 'create'])->name("create");
            Route::post('/update/{id}', [SliderController::class, 'update'])->name("update");
            Route::post('/delete/{id}', [SliderController::class, 'delete'])->name("delete");
            Route::get('/new', [SliderController::class, 'form'])->name("new");
            Route::get('/edit/{id}', [SliderController::class, 'editForm'])->name("edit");
        });

        Route::group(["prefix"=>"trainings","as"=>"trainings."], function () {
            Route::get('/', [TrainingController::class, 'all'])->name("index");
            Route::post('/create', [TrainingController::class, 'create'])->name("create");
            Route::post('/update/{id}', [TrainingController::class, 'update'])->name("update");
            Route::post('/delete/{id}', [TrainingController::class, 'delete'])->name("delete");
            Route::get('/new', [TrainingController::class, 'form'])->name("new");
            Route::get('/edit/{id}', [TrainingController::class, 'editForm'])->name("edit");
        });

        Route::group(["prefix"=>"missions","as"=>"missions."], function () {
            Route::get('/', [MissionController::class, 'index'])->name("index");
            Route::post('/create', [MissionController::class, 'create'])->name("create");
            Route::post('/update', [MissionController::class, 'update'])->name("update");
            Route::get('/edit', [MissionController::class, 'editForm'])->name("edit");
            // Route::get('/delete', function () {return view('admin/mission/update');})->name("delete");
        });

        Route::group(["prefix"=>"conditions","as"=>"conditions."], function () {
            Route::get('/', [ConditionController::class, 'all'])->name("index");
            Route::post('/create', [ConditionController::class, 'create'])->name("create");
            Route::post('/update/{id}', [ConditionController::class, 'update'])->name("update");
            Route::post('/delete/{id}', [ConditionController::class, 'delete'])->name("delete");
            Route::get('/new', [ConditionController::class, 'form'])->name("new");
            Route::get('/edit/{id}', [ConditionController::class, 'editForm'])->name("edit");
        });
    });
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home');


Route::get('/foo', function () {
    Artisan::call('storage:link');
});
