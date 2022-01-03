<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessRequests;
use Illuminate\Support\Facades\Auth;
use DateTime;
use App\DataCentres;

class ISUnitManagerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $today;
    protected $remaining_days;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function requestForm(){
        return view('is-unit-manager.requestform');
    }

    public function requests(){
        return view('is-unit-manager.requests')
                ->with('requests', AccessRequests::where('unit', '=', Auth::user()->unit)->orderBy('date', 'DESC')->get())
                ->with('pending', AccessRequests::where('unit', '=', Auth::user()->unit)->where('status', '=', 'pending')->get())
                ->with('confirmed', AccessRequests::where('unit', '=', Auth::user()->unit)->where('status', '=', 'confirmed')->get())
                ->with('denied', AccessRequests::where('unit', '=', Auth::user()->unit)->where('status', '=', 'denied')->get())
                ->with('approved', AccessRequests::where('unit', '=', Auth::user()->unit)->where('status', '=', 'approved')->get())
                ->with('rejected', AccessRequests::where('unit', '=', Auth::user()->unit)->where('status', '=', 'rejected')->get())
                ->with('expired', AccessRequests::where('unit', '=', Auth::user()->unit)->where('status', '=', 'expired')->get());
    }
    
    //revoke a request
    public function revokeRequest(Request $request){
        // dd($request->all());
        $revoke_request = AccessRequests::where('requestno', $request->revoke);
        $revoke_request->delete();
        $request->session()->flash('alert-success', ' Report is deleted successfully.');
        return redirect()->route('all-requests');
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
        // $origin = new DateTime('2009-10-11');
        // $target = new DateTime('2009-12-06');
        // $interval = $origin->diff($target);
        // echo $interval->format('%R%a days');
        // echo implode(" ", $request->accesstime);
        // $num = mt_rand(1000,9999);
        // echo $num;
        // $days = $request->enddate-$request->startdate;
        $letter = $request->file('letter');
        $letter = $letter->getClientOriginalName().time();

        //visiting days
        $startdate = new DateTime(str_replace("/","-",$request->startdate));
        $enddate = new DateTime(str_replace("/","-",$request->enddate));
        $interval = $startdate->diff($enddate);
        $interval = $interval->format('%R%a days');
        $days = str_replace('+', '', $interval);
        $days = str_replace('days', '', $days);

        //remaining days
        $today = new DateTime(date('Y-m-d'));
        $remaining_days = $today->diff($enddate);
        $remaining_days = $remaining_days->format('%R%a days');
        $remaining_days = str_replace('days', '', $remaining_days);
        
        if($remaining_days > 0){
            $remaining_days = $days;
        }
        else if($remaining_days < 0){
            $remaining_days = $today->diff($enddate);
            $remaining_days = $remaining_days->format('%R%a days');
            $remaining_days = str_replace('days', '', $remaining_days);
        }

        // echo $days;
        $personnel4 = $request['personnel4'];
        $personnel5 = $request['personnel5'];
        $personnel6 = $request['personnel6'];
        $personnel7 = $request['personnel7'];
        $personnel8 = $request['personnel8'];
        $personnel9 = $request['personnel9'];
        $personnel10 = $request['personnel10'];

        // dd($request->all());
        // $req_no = 1;
        // $req_id = date('d').date('m').substr(date('Y'), 2).$unit.mt_rand(1000,9999);
        // echo $req_id;
        // $this->validate($request, [
        //     'fullname' => 'required',
        //     'phonenumber' => 'required',
        //     'idnumber' => 'required',
        //     'startdate' => 'required',
        //     'enddate' => 'required',
        //     'accessrequiredto' => 'required',
        //     'accesstime' => 'required',
        //     'location' => 'required',
        //     'areastobeaccessed' => 'required',
        //     'personnel1' => 'required',
        //     'personnel2' => 'required',
        //     'personnel3' => 'required',
        //     'personnel4' => 'required',
        //     'impact' => 'required',
        //     'purpose' => 'required',
        // ]);

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
        
        $access_request = AccessRequests::create([
            'fullname' => $request->fullname ,
            'requestno' => date('d').date('m').substr(date('Y'), 2).$request->idnumber.mt_rand(1000, 9999),
            'phone_number' => $request->phonenumber,
            'id_number' => $request->idnumber,
            'date' => date('Y-m-d h:m:s'),
            'starting_date' => $request->startdate,
            'end_date' => $request->enddate,
            'visiting_days' => $days,
            'remaining_days' => $remaining_days,
            'access_req_location' => $request->accessrequiredto,
            'access_time' => implode(", ", $request->accesstime), 
            'areas_tobe_accessed' => implode(", ", $request->areastobeaccessed),
            'personnel1' => $request->personnel1,
            'personnel2' => $request->personnel2,
            'personnel3' => $request->personnel3,
            'personnel4' => $personnel4,
            'personnel5' => $personnel5,
            'personnel6' => $personnel6,
            'personnel7' => $personnel7,
            'personnel8' => $personnel8,
            'personnel9' => $personnel9,
            'personnel10' => $personnel10,
            'escortingteam' => $request->escortingteam,
            'escorts' => $request->escorts,
            'location' => $request->location,
            'impact' => $request->impact,
            'denial_reason' => '',
            'rejection_reason' => '',
            'purpose' => $request->purpose,
            'letter' => $letter,
            'unit' => $unit
        ]);

        return redirect()->route('all-requests');
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
        //remaining days is equal to enddate minus today
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
        
        $access_request = AccessRequests::where('requestno', '=', $requestno)->first()->update(['remaining_days' => $remaining_days, 'status' => 'pending']); //pending???
        //what to do if remaining days are less than zero?
        if($remaining_days < 0){
            $access_request = AccessRequests::where('requestno', '=', $requestno)->first()->update(['status' => 'expired']);
            $access_request = AccessRequests::where('requestno', '=', $requestno)->first()->update(['remaining_days' => 0]);
        }
        
        $request = AccessRequests::where('requestno', '=', $requestno)->first();
        return view('is-unit-manager.requestdetail')->with('request', $request);
    }
}
