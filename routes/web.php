<?php

use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;

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
Route::get('contact', [PageController::class, 'contact'])->name('contact');
