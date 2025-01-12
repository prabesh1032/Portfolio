<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }
    public function resume()
    {
        return view('resume');
    }
}
