<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogActivity;
use App\Race;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $races = Race::orderBy('racedate', 'asc')->get();
        $standings = getPlayersStandings();

        // return the view and pass it to the view to be looped through
        return view('home', compact('races', 'standings'));
    }
	 /**
     * Show the application dashboard for admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        // Go to the model and get a group of records
        $races = Race::orderBy('id', 'asc')->get();

        // return the view and pass it to the view to be looped through
        return view('adminHome')->with('races', $races);
    }

    public function clearLogs()
    {
        logActivity::truncate();
        add2Log('Activity Logs Cleared');
        return back();
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        //$logs = \LogActivity::logActivityLists();
        $logs = LogActivity::orderBy('id', 'desc')->paginate(25);
        return view('logActivity',compact('logs'));
    }
}
?>