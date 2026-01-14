<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('web.homepage');
    }

    public function aboutUs(): View
    {
        return view('web.pages.about.about-us');
    }

    public function organizationStructure(): View
    {
        return view('web.pages.about.organization-structure');
    }

    public function team(): View
    {
        return view('web.pages.about.team');
    }

    public function assemblyMember(): View
    {
        return view('web.pages.about.assembly-member');
    }

    public function ourActivity(): View
    {
        return view('web.pages.activity.our-activity');
    }

    public function upcomingActivity(): View
    {
        return view('web.pages.activity.upcoming-activity');
    }

    public function publication(): View
    {
        return view('web.pages.publication');
    }

    public function teacherArticle(): View
    {
        return view('web.pages.article.teacher-article');
    }

    public function studentArticle(): View
    {
        return view('web.pages.article.student-article');
    }

    public function gallery(): View
    {
        return view('web.pages.gallery');
    }

    public function vacancy(): View
    {
        return view('web.pages.vacancy');
    }

    public function contact(): View
    {
        return view('web.pages.contact');
    }
}
