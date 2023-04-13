<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProblemCounselling;

class ProblemCounsellingController extends Controller
{
    public function index()
    {
        $posts = ProblemCounselling::all();
       return view('user.problemCounselling.allProblemCounselling', compact('posts'));
    }

    public function indexDetails()
    {
        $posts = ProblemCounselling::all();
       return view('user.problemCounselling.problemCounsellingDetails', compact('posts'));
    }
}
