<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TableroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagsController;


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

Route::get('/', function () {
    return view('index');
    
//Registro de las rutas de autenticacion
require __DIR__.'/auth.php';


//Route::get("/admin", [TableroController::class, "tablero"])->name("index");
});

Auth::routes();

Route::get('/home', [HomeController::class, "index"])->name("home");
Route::get('/lista', [HomeController::class, "lista"])->name("lista");
Route::put("/lista/{id}",[HomeController::class, "revocar"])->name("revocar");
Route::get('/create', [HomeController::class, "create"])->name("create");
Route::post('/guardar', [HomeController::class, "guardar"])->name("guardar");

//TAGS
Route::get('/tags', [TagsController::class, "tags"])->name("tags");
Route::get('/tags/create', [TagsController::class, "Tcreate"])->name("Tcreate");
Route::delete('/tags/{id}', [TagsController::class, "destroy"])->name("destroy");
Route::get("/tags/confirmdelete", [TagsController::class, "confirmdelete"])->name("confirmdelete");


