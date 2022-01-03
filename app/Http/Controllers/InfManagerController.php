<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessRequests;
use App\LogBook;
use App\LogBook2;
use DateTime;

class InfManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function requests(){
        $requests = AccessRequests::where('is_confirmed', '=', '1')->orderBy('id', 'DESC')->get();
        return view('inf-manager.requests-confirmed')->with('requests', $requests);
    }

    public function requestForm(){
        return view('inf-manager.requestform');
    }

    public function permanentVisitors(){
        return view('inf-manager.permanent-visitors');
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

    public function requestDetails($requestno){
        $request = AccessRequests::where('requestno', '=', $requestno)->first();
        return view('inf-manager.requestdetail')->with('request', $request);
    }

    public function approveRequest(Request $request){
        //updating the status of the request to approved
        //$approve = AccessRequests::where('requestno', $request->is_approved)->first();
        
        
        // echo $newDate;
        $approve = AccessRequests::where('requestno', $request->is_approved)->update(['is_approved' => 1, 'status' => 'approved']);
        $approve = AccessRequests::where('requestno', $request->is_approved)->first();

        
        // //populate the logbook with initial values
        // //first get the number of visiting days and initialize the logbook with it
        $counter = 0;        
        while ($counter < $approve->visiting_days) {
            $newDate = str_replace('/', '-', $approve->starting_date);
            $newDate = date('Y-m-d', strtotime($newDate));
            $newDate = date("d/m/Y", strtotime($newDate. "+" . $counter . " day"));
            $access_request = LogBook::create([
                'requestno' => $request->is_approved,
                'admin_name' => '',
                'visiting_date' => $newDate,
                'morning_start' => '',
                'morning_end' => '',
                'afternoon_start' => '',
                'afternoon_end' => '',
                'personnels' => '',
            ]);
            $access_request = LogBook2::create([
                'requestno' => $request->is_approved,
                'admin_name' => '',
                'visiting_date' => $newDate,
                'morning_start' => '',
                'morning_end' => '',
                'afternoon_start' => '',
                'afternoon_end' => '',
                'personnels' => '',
            ]);
            
           $counter++;
        }
        
        return redirect()->back();
    }

    public function rejectRequest(Request $request){
        $deny = AccessRequests::where('requestno', $request->is_rejected)->update(['is_rejected' => 1, 'status' => 'rejected', 'rejection_reason' => $request->rejection_reason]);
        return redirect()->back();
    }
}
