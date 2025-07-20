<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Project;
use App\Models\Visit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {

        $date = \Carbon\Carbon::today()->subDays(30);
        $visitdate = Visit::where('visit_date', '>=', $date)->pluck('visit_date');
        $visits = Visit::where('visit_date', '>=', $date)->pluck('no_of_visits');
        $projects = Project::count();
        $messages = Message::count();
        return view('dashboard',compact( 'visitdate', 'visits', 'date', 'projects', 'messages'));
    }
}
