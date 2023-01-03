<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\FacultyMemberController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacultyMemberResearchController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Models\Designation;
use App\Models\FacultyMember;
use App\Models\FacultyMemberResearch;
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


Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');


Route::get('news',[NewsController::class, 'news'])->name('news');
Route::get('news/{slug}',[NewsController::class, 'newssingle'])->name('news.single');

Route::get('event', [EventController::class, 'event'])->name('event');
Route::get('event/{slug}', [EventController::class, 'eventsingle'])->name('event.single');

Route::get('research/{slug?}', [ResearchController::class, 'research'])->name('research');

Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');


Route::get('/program/{slug?}', [ProgramController::class, 'program'])->name('program');
Route::get('/department/{slug?}', [DepartmentController::class, 'department'])->name('department');

Route::get('notice/{slug?}', [NoticeController::class, 'notice'])->name('notice');

Route::get('notice-search', [NoticeController::class, 'noticeSearch'])->name('notice-search');


Route::redirect('/admin', '/login');

Route::get('faculty-member',[FacultyMemberController::class, 'facultyMember'])->name('faculty-member');
Route::get('member-profile/{slug}',[FacultyMemberController::class, 'memberProfile'])->name('member-profile');


Route::get('/{slug?}', [FrontendController::class, 'home'])->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('department', DepartmentController::class);
    Route::resource('category', CategoryController::class);

    Route::resource('news', NewsController::class);
    Route::get('news/featured/{id}', [NewsController::class, 'featured'])->name('news.featured');
    Route::get('news/action/{id}', [NewsController::class, 'action'])->name('news.action');

    Route::resource('research', ResearchController::class);
    Route::resource('faculty-member-research', FacultyMemberResearchController::class);

    Route::resource('faculty', FacultyController::class);
    Route::resource('notice', NoticeController::class);
    Route::resource('event', EventController::class);
    Route::get('event/featured/{id}', [EventController::class, 'featured'])->name('event.featured');

    Route::get('settings/global', [SettingController::class, 'index'])->name('setting.index');
    Route::get('settings/home', [SettingController::class, 'homesettings'])->name('setting.home');
    Route::put('settings/update/{id}', [SettingController::class, 'update'])->name('setting.update');
    Route::put('settings/update/section1/{id}', [SettingController::class, 'section1'])->name('setting.section1');


    Route::resource('faculty-member', FacultyMemberController::class);
    Route::get('get-country-year',[FacultyMemberController::class,'getCountryYear'])->name('get-country-year');

    Route::resource('programs', ProgramController::class);
    Route::resource('designation', DesignationController::class);
    Route::resource('page',PageController::class);
    Route::get('faculty-member-research-add/{id}',[FacultyMemberController::class,'addResearch'])->name('faculty-member-research-add');

    Route::post('faculty-member-research-store/{id}',[FacultyMemberController::class,'facultyMemberResearchStore'])->name('faculty-member-research-store');

    Route::resource('user', UserController::class);
});
