<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsernotificationsRequest;
use App\Http\Requests\UpdateUsernotificationsRequest;
use App\Models\Usernotifications;

class UsernotificationsController extends Controller
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
            $notifs = Usernotifications::where('admin_cleared', 0)->get();
            // dd($leaves);
            }else{
                $notifs = Usernotifications::where('action_to_cleared', 0)->where('action_to', auth()->user()->name)->get();
                // dd($leaves);
    
            }
            
            return view('notifications.index', compact('notifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clear()
    {
        //
        if (auth()->user()->roles->pluck('name')[0] === 'admin') {
            $notifs = Usernotifications::where('admin_cleared', 0)->update(["admin_cleared" => 1]);

            }else{
                $notifs = Usernotifications::where('action_to', auth()->user()->name)
                ->where('action_to_cleared', 0)->update(["action_to_cleared" => 1]);
                // dd($leaves);
    
            }
            
            return redirect()->to('/');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsernotificationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsernotificationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usernotifications  $usernotifications
     * @return \Illuminate\Http\Response
     */
    public function show(Usernotifications $usernotifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usernotifications  $usernotifications
     * @return \Illuminate\Http\Response
     */
    public function edit(Usernotifications $usernotifications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsernotificationsRequest  $request
     * @param  \App\Models\Usernotifications  $usernotifications
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsernotificationsRequest $request, Usernotifications $usernotifications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usernotifications  $usernotifications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usernotifications $usernotifications)
    {
        //
    }
}
