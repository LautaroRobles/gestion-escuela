<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(
    function () {
        Route::get('/alumnos', [AlumnoController::class, 'index']);
        Route::post('/alumnos', [AlumnoController::class, 'store']);
        Route::get('/alumnos/count', [AlumnoController::class, 'count']);
        Route::get('/alumnos/{id}', [AlumnoController::class, 'show']);

        Route::get('/cursos', [CursoController::class, 'index']);

        Route::post('/registrar', [AuthController::class, 'register']);
    }
);

Route::post('/login', [AuthController::class, 'login']);
