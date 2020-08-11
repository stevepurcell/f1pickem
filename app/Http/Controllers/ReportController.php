<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pick;
use App\User;

class ReportController extends Controller
{
    public function index($race_id)
    {
        // Go to the model and get a group of records
        $picks = Pick::where('race_id', $race_id)->orderBy('position', 'asc')->get();
        return view('reports.index', compact('picks'));
    }

    public function pickreport($user_id, $race_id)
    {
        // Go to the model and get a group of records
        $picks = Pick::where('user_id', $user_id)
            ->where('race_id', $race_id)
            ->where('position', '>', 0)
            ->orderBy('position', 'asc')->get();
        return view('reports.index', compact('picks'));
    }

}
