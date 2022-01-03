<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AccountsController extends Controller
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

    public function unitManager(){
        return view('admin.unit-manager-acc')->with('units', User::all());
    }

    public function addUser(){
        return view('admin.add-new-user')->with('users', User::all());
    }
    public function createNewUser(Request $request){
        // dd($request->all());
        // $this->validate($request, [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255',
        //     'password' => 'required|string|min:6',
        //     'unit' => 'required'
        // ]);
        $unit = '';
        switch ($request->unit) {
            case 'Infratructure Management':
                $unit = '03';
                break;
            case 'IS Application Management and Customization':
                $unit = '04';
                break;
            case 'IS Security':
                $unit = '06';
                break;
            case 'IS Operations and BC/DR Management':
                $unit = '05';
                break;
            case 'Business Analysis and IS PMO':
                $unit = '01';
                break;
            case 'Information Management':
                $unit = '02';
                break;
            default:
                $unit = '00';
                break;
        }

        
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'unit' => $unit,
            'role' => intval($request->role),
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->back();
    }

    public function createUnitManager(Request $request){
        // dd($request->all());
        // $this->validate($request, [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255',
        //     'password' => 'required|string|min:6',
        //     'unit' => 'required'
        // ]);
        $unit = '';
        switch ($request->unit) {
            case 'Infratructure Management':
                $unit = '03';
                break;
            case 'IS Application Management and Customization':
                $unit = '04';
                break;
            case 'IS Security':
                $unit = '06';
                break;
            case 'IS Operations and BC/DR Management':
                $unit = '05';
                break;
            case 'Business Analysis and IS PMO':
                $unit = '01';
                break;
            case 'Information Management':
                $unit = '02';
                break;
            default:
                //
                break;
        }

        $unitManager = UnitManagerAuth::create([
            'name' => $request->name,
            'email' => $request->email,
            'unit' => $unit,
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->back();
    }

    public function dcManager(){
        return view('admin.dc-manager-acc')->with('dcs', DCManagerAuth::all());
    }

    public function createDcManager(Request $request){
        $dcManager = DCManagerAuth::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->back();
    }

    public function infManager(){
        return view('admin.inf-manager-acc')->with('infs', InfManagerAuth::all());
    }

    public function createInfManager(Request $request){
        $dcManager = InfManagerAuth::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->back();
    }

    public function dcAdmin(){
        return view('admin.dc-admin-acc')->with('dcas', DCAdminAuth::all());
    }

    public function createDcAdmin(Request $request){
        $dcAdmin = DCAdminAuth::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->back();
    }

    public function dcReception(){
        return view('admin.dc-reception-acc')->with('dcrs', DCReceptionAuth::all());
    }

    public function createDcReception(Request $request){
        $dcReception = DCReceptionAuth::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->back();
    }

    public function suspendAccount(Request $request){
        $suspend = User::where('email', $request->suspend_u)->update(['is_active' => 0]);
        return redirect()->back();
        // switch ($request->unit) {
        //     case 'unit':
        //         $suspend = User::where('email', $request->suspend_u)->update(['is_active' => 0]);
        //         return redirect()->back();
        //         break;
        //     case 'dc':
        //         $suspend = DCManagerAuth::where('email', $request->suspend_dc)->update(['is_active' => 0]);
        //         return redirect()->back();
        //         break;
        //     case 'inf':
        //         $suspend = InfManagerAuth::where('email', $request->suspend_inf)->update(['is_active' => 0]);
        //         return redirect()->back();
        //         break;
        //     case 'dca':
        //         $suspend = DCAdminAuth::where('email', $request->suspend_dca)->update(['is_active' => 0]);
        //         return redirect()->back();
        //         break;
        //     default:
        //         dd($request->all());
        //         break;
        // }
    }

    public function restoreAccount(Request $request){
        $suspend = User::where('email', $request->restore_u)->update(['is_active' => 1]);
        return redirect()->back();
        // switch ($request->unit) {
        //     case 'unit':
        //         $suspend = UnitManagerAuth::where('email', $request->restore_u)->update(['is_active' => 1]);
        //         return redirect()->back();
        //         break;
        //     case 'dc':
        //         $suspend = DCManagerAuth::where('email', $request->restore_dc)->update(['is_active' => 1]);
        //         return redirect()->back();
        //         break;
        //     case 'inf':
        //         $suspend = InfManagerAuth::where('email', $request->restore_inf)->update(['is_active' => 1]);
        //         return redirect()->back();
        //         break;
        //     case 'dca':
        //         $suspend = DCAdminAuth::where('email', $request->restore_dca)->update(['is_active' => 1]);
        //         return redirect()->back();
        //         break;
        //     default:
        //         break;
        // }
        
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
