<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Mark Viscayca',

            'title' => 'Professionnal Basketball Player',

            'email' => 'viscaycamark@gmail.com',

            'phone' => '09307515806',

            'location' => 'PH, C-4 Road, River Side',

            'bio' => 'Its about not losing your head through some of the mistakes that you make, and continue to put into work.',

            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocLXxRW5OxnmJz5Eteu8pK0pAjlfEPt610IykC5S-Q-mISb_swQ=s288-c-no',

            'skills' => ['Leadership & Motivation', 'Teamwork and Communication', 'Focus & Mental Toughness'],

            'projects' => ['Developed a tailored training regimen focusing on agility, strength, and mental toughness, which helped enhance my on-court performance and led to noticeable improvements in my game stats across the season.'],

            'experience' => ['Team name <= Humball', 'Position <= PointGuard'],

            'education' => ['2nd Year College <= 2025'], 

            'social_links' => ['viscaycamark@gmail.com'] 

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}