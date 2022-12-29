<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\FacultyMemberController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ResearchController;
use App\Models\FacultyMember;
use Barryvdh\Debugbar\DataCollector\EventCollector;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/program', [FrontendController::class, 'program'])->name('program');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/event', [FrontendController::class, 'event'])->name('event');
Route::get('/department', [FrontendController::class, 'department'])->name('department');
Route::get('/department/{slug}', [FrontendController::class, 'department'])->name('department.single');
Route::get('/research', [FrontendController::class, 'research'])->name('research');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::redirect('/admin', '/login');

Route::get('faculty-member',[FacultyMemberController::class, 'facultyMember'])->name('faculty-member');
Route::get('member-profile/{slug}',[FacultyMemberController::class, 'memberProfile'])->name('member-profile');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('department', DepartmentController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('research', ResearchController::class);
    Route::resource('faculty', FacultyController::class);
    Route::resource('notice', NoticeController::class);
    Route::resource('event', EventController::class);
    Route::resource('faculty-member', FacultyMemberController::class);
    Route::get('get-country-year',[FacultyMemberController::class,'getCountryYear'])->name('get-country-year');
});
