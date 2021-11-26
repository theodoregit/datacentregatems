<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessRequests;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index')
                    ->with('requests', count(AccessRequests::all()))
                    ->with('confirmed', AccessRequests::where('is_confirmed', '=', '1')->count())
                    ->with('approved', AccessRequests::where('is_approved', '=', '1')->count())
                    ->with('infra', AccessRequests::where('unit', '=', '03')->count())
                    ->with('sdc', AccessRequests::where('unit', '=', '04')->count())
                    ->with('security', AccessRequests::where('unit', '=', '06')->count())
                    ->with('operation', AccessRequests::where('unit', '=', '05')->count())
                    ->with('analysis', AccessRequests::where('unit', '=', '01')->count())
                    ->with('infoman', AccessRequests::where('unit', '=', '02')->count());
    }
}
