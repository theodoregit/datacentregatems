<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessRequests;
use App\LogBook;
use App\LogBook2;
use App\Checks;
use DateTime;

class DCAdminsController extends Controller
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

    public function requests(){
        $approved_requests = AccessRequests::where('is_approved', '1')->orderBy('date', 'DESC')->get();
        return view('dc-admins.requests')->with('approved_requests', $approved_requests);
    } 

    public function requestForm(){
        return view('dc-admins.request-form-dc-admin');
    } 

    public function trackRequest($requestno){
        $request = AccessRequests::where('requestno', '=', $requestno)->first();
        $track = LogBook::where('requestno', '=', $requestno)->where('visiting_date', '=', date('d/m/Y'))->first();
        // dd($request->all());
        $starting_date = date('Y-m-d', strtotime(str_replace('/', '-', $request->starting_date)));
        $end_date = date('Y-m-d', strtotime(str_replace('/', '-', $request->end_date)));
        $today = (date('Y-m-d'));

        $interval = (new DateTime($starting_date))->diff(new DateTime($today));
        $interval = $interval->format('%R%a days');
        $diffs = str_replace('+', '', $interval);
        $diffs = str_replace('days', '', $diffs);

        $interval = (new DateTime($end_date))->diff(new DateTime($today));
        $interval = $interval->format('%R%a days');
        $diffe = str_replace('+', '', $interval);
        $diffe = str_replace('days', '', $diffe);


        //store each personnels in an array
        $personnels = array($request['personnel1'], $request['personnel2'], $request['personnel3'], $request['personnel4'], $request['personnel5'], 
                            $request['personnel6'], $request['personnel7'], $request['personnel8'], $request['personnel9'], $request['personnel10']);
        $personnels = array_filter($personnels);
        return view('dc-admins.track-requests')->with('track_request', $request)
                                                ->with('track', $track)
                                                ->with('personnels', $personnels)
                                                ->with('starting_date', $starting_date)
                                                ->with('today', $today)
                                                ->with('diffs', $diffs)
                                                ->with('diffe', $diffe);
    }

    public function requestDetails($requestno){
        $request = AccessRequests::where('requestno', '=', $requestno)->first();
        return view('dc-admins.requestdetails')->with('approved_requests', $request);
    }

    public function track(Request $request){
        
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
        // ]);

        
        //either save or submit
        if($request->location == '1'){
            switch ($request->submitiontype) {
                case 'save':
                    //updates the logbook
                    $logbook = LogBook::where('requestno', $request->requestno)->where('visiting_date', date('d/m/Y'))->update([
                        'admin_name' => $request->admin_name,
                        'morning_start' => $request->morning_start,
                        'morning_end' => $request->morning_end,
                        'afternoon_start' => $request->afternoon_start,
                        'afternoon_end' => $request->afternoon_end,
                        'personnels' =>  implode(", ", $request->personnels),
                        ]);
                    //record the check-ins and outs
                    $checks = Checks::create([
                        'requestno' => $request->requestno,
                        'date' => date('d/m/Y'),
                        'location' => $request->location,
                        'checkedin' => $request->checkin,
                        'checkedout' => $request->checkout,
                        'personnels' =>  implode(", ", $request->personnels),
                    ]);
                    break;
                case 'submit':
                    echo "this is submit";
                    break;
                default:
                    //
                    break;
            }
        }
        elseif($request->location == '2'){
            switch ($request->submitiontype) {
                case 'save':
                    $logbook = LogBook2::where('requestno', $request->requestno)->where('visiting_date', date('d/m/Y'))->update([
                        'admin_name' => $request->admin_name,
                        'morning_start' => $request->morning_start,
                        'morning_end' => $request->morning_end,
                        'afternoon_start' => $request->afternoon_start,
                        'afternoon_end' => $request->afternoon_end,
                        'personnels' =>  implode(", ", $request->personnels),
                        ]);
                    $checks = Checks::create([
                        'requestno' => $request->requestno,
                        'date' => date('d/m/Y'),
                        'location' => $request->location,
                        'checkin' => $request->checkin,
                        'checkout' => $request->checkout
                    ]);
                    break;
                case 'submit':
                    echo "this is submit";
                    break;
                default:
                    //
                    break;
            }
        }
        // switch ($request->submitiontype) {
        //     case 'save':
        //         $logbook = LogBook::where('requestno', $request->requestno)->where('visiting_date', date('d/m/Y'))->update([
        //             'admin_name' => $request->admin_name,
        //             'location' => $request->location,
        //             'morning_start' => $request->morning_start,
        //             'morning_end' => $request->morning_end,
        //             'afternoon_start' => $request->afternoon_start,
        //             'afternoon_end' => $request->afternoon_end,
        //             'personnels' =>  implode(", ", $request->personnels),
        //             ]);
        //         break;
        //     case 'submit':
        //         echo "this is submit";
        //         break;
        //     default:
        //         //
        //         break;
        // }

        return redirect()->back();
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
