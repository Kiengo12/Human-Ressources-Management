<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchController;

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
    return view('auth.postulant');
});


Route::get('/dashboard', function () {
    
    $prestataires = DB::table('users')->where('role','prestataire')->get();
    $postulants = DB::table('users')->where('role','postulant')->get();
    $entreprises = DB::table('users')->where('role','entreprise')->get();
    $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
    return view('dashboard',compact('prestataires','postulants','entreprises','entrepreneurs'));
})->middleware(['auth'])->name('dashboard');

Route::get('search', [searchController::class, 'search']);

require __DIR__.'/auth.php';
