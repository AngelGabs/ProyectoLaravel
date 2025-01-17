<?php
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\TestController;
use App\Models\Medico;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
}) -> name ("index");

/*
Route::get('/products', function () {
    return view('products_index');
}) -> name ("products");

Route::get('/indexProducts',[App\Http\Controllers\ProductController::class, 'index'])
->name ('products');

Route::get('/createProducts',[App\Http\Controllers\ProductController::class, 'create'])
->name ('pcreate');

Route::post('/storeProducts/{store}',[App\Http\Controllers\ProductController::class, 'store'])
->name ('pstore');

Route::get('/editProducts/{product}/edit',[App\Http\Controllers\ProductController::class, 'edit'])
->name ('pedit');

Route::put('/updateProducts/{product}',[App\Http\Controllers\ProductController::class, 'update'])
->name ('pstore');

Route::get('/showProducts/{product}',[App\Http\Controllers\ProductController::class, 'show'])
->name ('pshow');

Route::delete('/destroyProducts/{product}',[App\Http\Controllers\ProductController::class, 'destroy'])
->name ('pdestroy');*/

//Ruta Tipo Recursos para métodos REST, que permite crear las rutas para un CRUD de las 7 funciones de un controllercle




Route::resource('medicos', App\Http\Controllers\MedicoController::class);
Route::resource('pacientes', PacienteController::class);
Route::resource('citas', CitaController::class);
Route::resource('usuarios',  UsuarioController::class);
Route::resource('areas', AreaController::class);
Route::get('/citas/{id}/delete', [CitaController::class, 'showDeleteForm'])
    ->name('citas.showDeleteForm');

// Registering routes in web.php



/*                  
Route::get('/clients', function () {
    return view('clients_index');
}) -> name ("clients");

Route::get('/sale', function () {
    return view('sales_index');
}) -> name ("sales");*/

