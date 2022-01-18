<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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


Route::get("/", [Controller::class, "home"]);
Route::get("/utilisateur/{id}", [Controller::class, "show"])->name("detail");
Route::get("/group/{id}", [Controller::class, "showuser"])->name("user");
Route::get("/import-form", [Controller::class, "importForm"])->name("excel");
Route::post("/import", [Controller::class, "import"])->name("utilisateur-import");