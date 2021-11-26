<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnitManagerAuth;
use App\DCManagerAuth;
use App\InfManagerAuth;
use App\DCAdminAuth;

class ManageAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function resetPassword(){
        return view('admin.reset-password');
    }

    public function removeAccount(){
        return view('admin.remove-account')
                    ->with('unitsm', UnitManagerAuth::all())
                    ->with('dcm', DCManagerAuth::all())
                    ->with('infm', InfManagerAuth::all())
                    ->with('dcas', DCAdminAuth::all());
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
}
