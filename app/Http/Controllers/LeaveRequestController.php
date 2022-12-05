<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeaveRequestRequest;
use App\Http\Requests\UpdateLeaveRequestRequest;
use App\Models\LeaveRequest;
use App\Models\User;
use App\Mail\Leaves;
use App\Models\Usernotifications;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
class LeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (auth()->user()->roles->pluck('name')[0] === 'admin') {
        $leaves = LeaveRequest::get();
        // dd($leaves);
        }else{
            $leaves = LeaveRequest::where('user_id', auth()->user()->name)->get();
            // dd($leaves);

        }
        
        return view('leaves.index', compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::get();
        return view('leaves.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeaveRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaveRequestRequest $request)
    {
        //
        // dd($request->all());
        $data = request()->validate([
            'user_id'=>'required',
            'leave_type'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'no_of_days'=>'required',
            'hand_over_to'=>'required',
            'report'=>'required|mimes:pdf',
            'comments'=>'required',
        ]);
        $filename = time() . '.' . $request->report->extension();
         $path = $request->report->move(public_path('attachment/'), $filename);
         $report = $path;
        //  dd($report);
          $leavetypes= LeaveRequest::create([
            'user_id'  => $data['user_id'],
            'leave_type'  => $data['leave_type'],
            'start_date'  => $data['start_date'],
            'end_date'  => $data['end_date'],
            'no_of_days'  => $data['no_of_days'],
            'hand_over_to'  => $data['hand_over_to'],
            'report'  => $filename,
            'comments'  => $data['comments'],

        ]);
        
        $usernotify = Usernotifications::create([

            'action_by'  => $data['user_id'],
            'admin_cleared'  => '0',
            'action_to_cleared'  => '0',
            'action_taken'  => $data['user_id']. ' Requested For A leave',
            'action_to'  => $data['hand_over_to'],


        ]);
        $email = $request->user()->email;
        
            Mail::to($email)->send(new Leaves ($email));
           
        
         return redirect()->back()->with('message', 'Leave applied successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeaveRequest  $leaveRequest
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveRequest $leaveRequest)
    {
        //
        return view('leaves.show', compact('leaveRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeaveRequest  $leaveRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaveRequest $leaveRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeaveRequestRequest  $request
     * @param  \App\Models\LeaveRequest  $leaveRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeaveRequestRequest $request, LeaveRequest $leaveRequest)
    {
        //
        $leaveRequest->approved = true;
        $leaveRequest->save();

        return redirect()->back()->with('message', 'Leave Request approved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaveRequest  $leaveRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveRequest $leaveRequest)
    {
        //
        $leaveRequest->delete();

        return redirect()->back()->with('message', 'Leave Request Deleted Successfully');
    }
}
