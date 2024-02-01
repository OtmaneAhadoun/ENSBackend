<?php

use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\InscriptionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [userController::class, "login"])->name('login');
Route::post('/logout', [userController::class, "loGout"])->name('loGout');


Route::resource('professeur', ProfesseurController::class);
Route::resource('module', MatiereController::class);
Route::resource('cours', CoursController::class);
Route::resource('filiere', FiliereController::class);
Route::resource('inscription', InscriptionController::class);

Route::get('/candidats', [InscriptionController::class, "all"]);
Route::get('/preselect', [InscriptionController::class, "preSelect"])->name('preSelect');
Route::get('/getcount', [InscriptionController::class, "getCount"])->name('getCount');
Route::get('/getetudiantbyfiliere', [InscriptionController::class, "getetudiantbyfiliere"])->name('getetudiantbyfiliere');
Route::get('/getstatistic', [InscriptionController::class, "getstatistic"])->name('getstatistic');

Route::get('/getModule/{id}', [MatiereController::class, "getMatiere"])->name('getMatiere');