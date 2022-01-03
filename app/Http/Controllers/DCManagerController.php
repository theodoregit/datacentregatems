<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessRequests;
use DateTime;

class DCManagerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function requestForm(){
        return view('dc-manager.requestform');
    }

    public function requests(){
        return view('dc-manager.requests')->with('requests', AccessRequests::orderBy('id', 'DESC')->get());
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //request details
    public function requestDetails($requestno){
        $enddate = AccessRequests::where('requestno', $requestno)->pluck('end_date');
        $startdate = AccessRequests::where('requestno', $requestno)->pluck('starting_date');

        $enddate = str_replace('[', '', $enddate);
        $enddate = str_replace(']', '', $enddate);
        $enddate = str_replace('\\', '', $enddate);
        $enddate = str_replace('"', '', $enddate);
        $enddate = str_replace('/', '-', $enddate);

        $startdate = str_replace('[', '', $startdate);
        $startdate = str_replace(']', '', $startdate);
        $startdate = str_replace('\\', '', $startdate);
        $startdate = str_replace('"', '', $startdate);
        $startdate = str_replace('/', '-', $startdate);

        $startdate = new DateTime($startdate);
        $enddate = new DateTime($enddate);
        
        $interval = $startdate->diff($enddate);
        $interval = $interval->format('%R%a days');
        $visiting_days = str_replace('+', '', $interval);
        $visiting_days = str_replace('days', '', $visiting_days);

        $today = new DateTime(date('Y-m-d'));
        $remaining_days = $today->diff($enddate);
        $remaining_days = $remaining_days->format('%R%a days');
        $remaining_days = str_replace('days', '', $remaining_days);
        $remaining_days = $remaining_days+0;
        
        
        if($remaining_days > $visiting_days){
            $remaining_days = $visiting_days;
        }
        // echo $visiting_days;
        
        $access_request = AccessRequests::where('requestno', '=', $requestno)->first()->update(['remaining_days' => $remaining_days, 'status' => 'pending']);
        //what to do if remaining days are less than zero?
        if($remaining_days < 0){
            $access_request = AccessRequests::where('requestno', '=', $requestno)->first()->update(['status' => 'expired']);
            $access_request = AccessRequests::where('requestno', '=', $requestno)->first()->update(['remaining_days' => 0]);
        }
        $request = AccessRequests::where('requestno', '=', $requestno)->first();
        return view('dc-manager.requestdetail')->with('request', $request);
    }

    public function confirmRequest(Request $request){
        $confirmation = AccessRequests::where('requestno', $request->is_confirmed)->update(['is_confirmed' => 1]);
        $confirmation = AccessRequests::where('requestno', $request->is_confirmed)->update(['status' => 'confirmed']);
        return redirect()->back();
    }

    public function denyRequest(Request $request){
        $deny = AccessRequests::where('requestno', $request->is_denied)->update(['is_denied' => 1, 'status' => 'denied', 'denial_reason' => $request->denial_reason]);
        return redirect()->back();
    }
}
