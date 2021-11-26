<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessRequests;

class InfManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function requests(){
        $requests = AccessRequests::where('is_confirmed', '=', '1')->orderBy('date', 'DESC')->get();
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
        $approve = AccessRequests::where('requestno', $request->is_approved)->update(['is_approved' => 1]);
        return redirect()->back();
    }

    public function rejectRequest(Request $request){
        $deny = AccessRequests::where('requestno', $request->is_rejected)->update(['is_rejected' => 1, 'rejection_reason' => $request->rejection_reason]);
        return redirect()->back();
    }
}
