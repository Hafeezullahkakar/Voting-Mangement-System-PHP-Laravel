<?php

use App\Http\Controllers\Frontend\CandidateController;
use App\Http\Controllers\Frontend\ECPController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\VoterController;

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

Route::get('/', [HomeController::class, 'index']);


Route::get('/ECPRegister', [ECPController::class, 'register']);
Route::post('/ECPRegister', [ECPController::class, 'store']);
Route::get('/ECPLogin', [ECPController::class, 'Login']);
Route::get('/ECPDashboard', [ECPController::class, 'dashboard']);
Route::post('/ECPDashboard/{id}', [ECPController::class, 'approveCandidate']);
Route::get('/deletPost/{id}', [ECPController::class, 'deletPost'])->name("deletPost");


Route::get('/VoterReg', [VoterController::class, 'index']);
Route::post('/VoterReg', [VoterController::class, 'store']);
Route::get('/VoterLogin', [VoterController::class, 'login']);
Route::get('/validate', [VoterController::class, 'validateUser']);
Route::get('/VoterDashboard', [VoterController::class, 'dashboard']);
Route::get('/results', [VoterController::class, 'resutldashboard']);
Route::get('/vote-candidate/{id}', [VoterController::class, 'votecandidate'])->name("vote-candidate");


Route::get('/CandidateReg', [CandidateController::class, 'index']);
Route::post('/candidatestore', [CandidateController::class, 'store']);
Route::get('/CandidateLogin', [CandidateController::class, 'login']);
Route::get('/CandidateDashboard', [CandidateController::class, 'dashboard']);
