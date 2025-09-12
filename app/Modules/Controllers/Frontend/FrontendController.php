<?php

namespace App\Modules\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{

    public function HomePage()
    {
        return Inertia::render('HomePage/Index', [
            'event' => [
                'title' => 'Login Page',
            ]
        ]);
    }
    public function VocabularyPage()
    {
        return Inertia::render('Words/Index', [
            'event' => [
                'title' => 'Words Page',
            ]
        ]);
    }
    public function VocabularyTestPage()
    {
        return Inertia::render('VocabularyTest/Index', [
            'event' => [
                'title' => 'Words Page',
            ]
        ]);
    }
}
