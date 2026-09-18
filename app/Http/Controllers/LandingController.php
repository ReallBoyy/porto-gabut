<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LandingController extends Controller
{
    /**
     * Render the single-page portfolio.
     *
     * All copy lives in config/portfolio.php so the view stays markup-only.
     */
    public function __invoke(): View
    {
        return view('landing', [
            'portfolio' => config('portfolio'),
        ]);
    }
}