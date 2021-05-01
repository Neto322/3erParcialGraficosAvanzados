<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TableroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\OrganizationController;


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
Route::get('/lista', [UsersController::class, "lista"])->name("lista");
Route::put("/lista/{id}",[UsersController::class, "revocar"])->name("revocar");
Route::get('/create', [UsersController::class, "create"])->name("create");
Route::post('/guardar', [UsersController::class, "guardar"])->name("guardar");
Route::get("/editar/{id}", [UsersController::class, "editar"])->name("editar");
Route::put("/editar/{id}/actualizar", [UsersController::class, "actualizar"])->name("actualizar");
Route::post("/create",[UsersController::class, "store"])->name("store");

//Contacto

Route::get('/contacto/crear', [ContactoController::class, "crearContacto"])->name("crearContacto");
Route::put('/contacto/crear', [ContactoController::class, "guardarContacto"])->name("guardarContacto");
Route::get('/contacto/listar', [ContactoController::class, "listarContacto"])->name("listarContacto");
Route::get('/contacto/editar/{id}', [ContactoController::class, "editarContacto"])->name("editarContacto");
Route::get('/contacto/listar/baja', [ContactoController::class, "baja"])->name("baja");




//TAGS

Route::get('/tags', [TagsController::class, "tags"])->name("tags");
Route::get('/tags/create', [TagsController::class, "create"])->name("tags.create");
Route::get('tags/edit/{id}', [TagsController::class, "editar"])->name("tags.editar");
Route::put("tags/edit/{id}/actualizar", [TagsController::class, "actualizar"])->name("tags.actualizar");
Route::get("tags/edit/{id}/confirmdelete",[TagsController::class, "confirmdelete"])->name("tags.confirmdelete");
Route::delete('/tags/{id}', [TagsController::class, "destroy"])->name("tags.destroy");
Route::get('/widgets', [TagsController::class, "widgets"])->name("tags.widgets");
Route::get('/busquedastags', [TagsController::class, "busquedastags"])->name("tags.busquedastags");

Route::post("tags/create",[TagsController::class, "store"])->name("tags.store");

