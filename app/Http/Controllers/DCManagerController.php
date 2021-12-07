<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessRequests;

class DCManagerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:dc-manager');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function requestForm(){
        return view('dc-manager.requestform');
    }

    public function requests(){
        return view('dc-manager.requests')->with('requests', AccessRequests::orderBy('date', 'DESC')->get());
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
        $request = AccessRequests::where('requestno', '=', $requestno)->first();
        return view('dc-manager.requestdetail')->with('request', $request);
    }

    public function confirmRequest(Request $request){
        $confirmation = AccessRequests::where('requestno', $request->is_confirmed)->update(['is_confirmed' => 1, 'status' => 'confirmed']);
        return redirect()->back();
    }

    public function denyRequest(Request $request){
        $deny = AccessRequests::where('requestno', $request->is_denied)->update(['is_denied' => 1, 'status' => 'denied', 'denial_reason' => $request->denial_reason]);
        return redirect()->back();
    }
}
