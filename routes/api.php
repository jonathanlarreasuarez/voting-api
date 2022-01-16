<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CandidateController;
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

/**
 * Candidates
 */
Route::get('/candidates', [CandidateController::class, 'index']);
Route::get('/candidates/{candidate}', [CandidateController::class, 'show']);
Route::post('/candidates', [CandidateController::class, 'store']);
Route::put('/candidates/{candidate}', [CandidateController::class, 'update']);
Route::delete('/candidates/{candidate}', [CandidateController::class, 'destroy']);
