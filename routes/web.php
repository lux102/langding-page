<?php

use App\Http\Controllers\admin\ProjectCategoryController;
use App\Http\Controllers\admin\ProjectsController;
use App\Http\Controllers\admin\ProposalController as AdminProposalController;
use App\Http\Controllers\admin\RecruitmentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProposalController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/gioi-thieu', function () {
    return view('about');
});

Route::get('/dich-vu', function () {
    return view('services');
});

Route::get('/du-an', [HomeController::class, 'projects']);

Route::get('/tin-tuc', function () {
    return view('blog');
});

Route::get('/lien-he', function () {
    return view('contact');
});
Route::post('/proposals', [ProposalController::class, 'store']);

Route::get('/shopdrawing', [HomeController::class, 'shopdrawing']);

Route::get('/dao-tao', [HomeController::class, 'training']);

Route::get('/tuyen-dung', [HomeController::class, 'recruitment']);


Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');

        Route::get('/', [ProjectsController::class, 'index'])->name('admin');

        // projects
        Route::post('/projects', [ProjectsController::class, 'create']);
        Route::get('/projects/create', [ProjectsController::class, 'showCreateForm']);
        Route::delete('/projects/{id}', [ProjectsController::class, 'destroy']);
        Route::get('/projects', [ProjectsController::class, 'index']);
        // recruitments
        Route::post('/recruitments', [RecruitmentController::class, 'create']);
        Route::get('/recruitments/create', [RecruitmentController::class, 'showCreateForm']);
        Route::delete('/recruitments/{id}', [RecruitmentController::class, 'destroy']);
        Route::get('/recruitments', [RecruitmentController::class, 'index']);
        // proposals
        Route::delete('/proposals/{id}', [AdminProposalController::class, 'destroy']);
        Route::get('/proposals', [AdminProposalController::class, 'index']);
        // project categories
        Route::get('/project-categories', [ProjectCategoryController::class, 'index']);
        Route::post('/project-categories', [ProjectCategoryController::class, 'create']);
        Route::delete('/project-categories/{id}', [ProjectCategoryController::class, 'destroy']);
    });
});
