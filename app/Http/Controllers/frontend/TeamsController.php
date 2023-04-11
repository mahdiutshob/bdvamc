<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function director()
    {
        return view('frontend.teams.director');
    }

    public function management()
    {
        return view('frontend.teams.management');
    }
}
