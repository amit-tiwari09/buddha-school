<?php

use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;

/* ======================Web====================== */
Route::get('/', [PageController::class, 'home'])->name('homepage');
Route::get('about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('organization-structure', [PageController::class, 'organizationStructure'])->name('organization-structure');
Route::get('team', [PageController::class, 'team'])->name('team');
Route::get('assembly-member', [PageController::class, 'assemblyMember'])->name('assembly-member');
Route::get('our-activity', [PageController::class, 'ourActivity'])->name('our-activity');
Route::get('upcoming-activity', [PageController::class, 'upcomingActivity'])->name('upcoming-activity');
Route::get('publication', [PageController::class, 'publication'])->name('publication');
Route::get('teacher-article', [PageController::class, 'teacherArticle'])->name('teacher-article');
Route::get('student-article', [PageController::class, 'studentArticle'])->name('student-article');
Route::get('gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('vacancy', [PageController::class, 'vacancy'])->name('vacancy');
Route::get('contact-us', [PageController::class, 'contact'])->name('contact');

/* ======================Dashboard====================== */
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('teacher', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('events', [EventController::class, 'index'])->name('event.index');
Route::get('activity', [ActivityController::class, 'index'])->name('activity.index');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('admins', [AdminController::class, 'index'])->name('admin.index');
Route::get('students', [StudentController::class, 'index'])->name('student.index');
Route::get('classes', [ClassesController::class, 'index'])->name('classes.index');
