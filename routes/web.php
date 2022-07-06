<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;

use App\Http\Controllers\Company\IndexController as CompanyIndexController;
use App\Http\Controllers\Company\CreateController as CompanyCreateController;
use App\Http\Controllers\Company\StoreController as CompanyStoreController;
use App\Http\Controllers\Company\ShowController as CompanyShowController;
use App\Http\Controllers\Company\EditController as CompanyEditController;
use App\Http\Controllers\Company\UpdateController as CompanyUpdateController;
use App\Http\Controllers\Company\DeleteController as CompanyDeleteController;

use App\Http\Controllers\Board\IndexController as BoardIndexController;
use App\Http\Controllers\Board\CreateController as BoardCreateController;
use App\Http\Controllers\Board\StoreController as BoardStoreController;
use App\Http\Controllers\Board\ShowController as BoardShowController;
use App\Http\Controllers\Board\EditController as BoardEditController;
use App\Http\Controllers\Board\UpdateController as BoardUpdateController;
use App\Http\Controllers\Board\DeleteController as BoardDeleteController;

use App\Http\Controllers\Problem\IndexController as ProblemIndexController;
use App\Http\Controllers\Problem\CreateController as ProblemCreateController;
use App\Http\Controllers\Problem\StoreController as ProblemStoreController;
use App\Http\Controllers\Problem\ShowController as ProblemShowController;
use App\Http\Controllers\Problem\EditController as ProblemEditController;
use App\Http\Controllers\Problem\UpdateController as ProblemUpdateController;
use App\Http\Controllers\Problem\DeleteController as ProblemDeleteController;

use App\Http\Controllers\Task\IndexController as TaskIndexController;
use App\Http\Controllers\Task\CreateController as TaskCreateController;
use App\Http\Controllers\Task\StoreController as TaskStoreController;
use App\Http\Controllers\Task\ShowController as TaskShowController;
use App\Http\Controllers\Task\EditController as TaskEditController;
use App\Http\Controllers\Task\UpdateController as TaskUpdateController;
use App\Http\Controllers\Task\DeleteController as TaskDeleteController;

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

Route::get('/', IndexController::class)->name('main.index');

Route::group(['prefix' => 'company'], function () {
    Route::get('/', CompanyIndexController::class)->name('company.index');
    Route::get('/create', CompanyCreateController::class)->name('company.create');
    Route::post('/', CompanyStoreController::class)->name('company.store');
    Route::get('/{company}', CompanyShowController::class)->name('company.show');
    Route::get('/{company}/edit', CompanyEditController::class)->name('company.edit');
    Route::patch('/{company}', CompanyUpdateController::class)->name('company.update');
    Route::delete('/{company}', CompanyDeleteController::class)->name('company.delete');

});

Route::group(['prefix' => 'board'], function () {
    Route::get('/', BoardIndexController::class)->name('board.index');
    Route::get('/create', BoardCreateController::class)->name('board.create');
    Route::post('/', BoardStoreController::class)->name('board.store');
    Route::get('/{board}', BoardShowController::class)->name('board.show');
    Route::get('/{board}/edit', BoardEditController::class)->name('board.edit');
    Route::patch('/{board}', BoardUpdateController::class)->name('board.update');
    Route::delete('/{board}', BoardDeleteController::class)->name('board.delete');

});

Route::group(['prefix' => 'problem'], function () {
    Route::get('/', ProblemIndexController::class)->name('problem.index');
    Route::get('/create', ProblemCreateController::class)->name('problem.create');
    Route::post('/', ProblemStoreController::class)->name('problem.store');
    Route::get('/{problem}', ProblemShowController::class)->name('problem.show');
    Route::get('/{problem}/edit', ProblemEditController::class)->name('problem.edit');
    Route::patch('/{problem}', ProblemUpdateController::class)->name('problem.update');
    Route::delete('/{problem}', ProblemDeleteController::class)->name('problem.delete');

});

Route::group(['prefix' => 'task'], function () {
    Route::get('/', TaskIndexController::class)->name('task.index');
    Route::get('/create', TaskCreateController::class)->name('task.create');
    Route::post('/', TaskStoreController::class)->name('task.store');
    Route::get('/{task}', TaskShowController::class)->name('task.show');
    Route::get('/{task}/edit', TaskEditController::class)->name('task.edit');
    Route::patch('/{task}', TaskUpdateController::class)->name('task.update');
    Route::delete('/{task}', TaskDeleteController::class)->name('task.delete');

});
