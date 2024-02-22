<?php
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\EditorialesController;
use App\Http\Controllers\SitioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Libros;
use App\Models\Editoriales;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function (){
    return view('welcome');
});

Route::get('formulario', function () {
    return view('comentario.formulario');
});


Route::get('/informacion/{tipo?}', [SitioController::class, 'info']);

Route::get('/contacto',[ComentarioController::class, 'create']);

Route::post('/contacto', [ComentarioController::class, 'store']);

Route::resource('comentario', ComentarioController::class);

///fin de comentario e inicio de libros

Route::get('libros', function () {
    return view('libros.createLibros');
});

Route::get('/libros', [LibrosController::class, 'create']);

Route::post('/libros', [LibrosController::class, 'store']);

Route::resource('libros', LibrosController::class);

/// fin de libros e inicio de editoriales

Route::get('editoriales', function () {
    return view('editoriales.createEditoriales');
});

Route::get('/editoriales', [EditorialesController::class, 'create']);

Route::post('/editoriales', [EditorialesController::class, 'store']);

Route::resource('editoriales', EditorialesController::class);
