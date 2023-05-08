<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Vacancy\Models\Vacancy;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::activeItems()->paginate();
        
        return view('page.vacancy.index', compact('vacancies'));
    }

    public function show($slug)
    {
        $vacancy = Vacancy::activeItem($slug)->firstOrFail();

        return view('page.vacancy.show', compact('vacancy'));
    }
}
