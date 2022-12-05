<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use App\Models\LeaveRequest;
use App\Models\UserReview;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Auth;
use DB;
use Socialite;
use Google_Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $users = User::role('user')->latest()->simplePaginate(500);
        return view('users.index', compact('users'));
    }
    
    public function usersapi()
    {
        $users = User::role('user')->get()->toArray();
        return $users;
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function changePassword()
    {
       return view('users.change-password');
    }
    public function updatePassword(Request $request)
    {
            # Validation
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);


            #Match The Old Password
            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }


            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            return back()->with("status", "Password changed successfully!");
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
       
       $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
        // dd($data);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->assignRole('user');
        // dd($user);

        $users = User::role('user')->latest()->simplePaginate(500);
        return view('users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('status', 'User Deleted Successfully');
    }

    public function updateUser(Request $request, User $user)

    {
        $user->update($request->all());

    		 return Redirect::back()->with('UserUpdateMsg', 'User detail update successfully!');  
 	


    }
   
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function handleProviderCallback($driver)
    {
        try {
            $user = Socialite::driver($driver)->user();
        } catch (\Exception $e) {
            return redirect()->route('login');
        }

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $newUser                    = new User;
            $newUser->name              = $user->getName();
            $newUser->email             = $user->getEmail();
            $newUser->assignRole('user');
            $newUser->save();

            auth()->login($newUser, true);
        }
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
     public function handleProviderCallbacksss(Request $request, $driver){
        //  dd($request->all());
         $existingUser = User::where('email', $request->input('email'))->first();
        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $newUser                    = new User;
            $newUser->name              = $request->input('fullname');
            $newUser->email             = $request->input('email');
            $newUser->assignRole('user');
            $newUser->save();

            auth()->login($newUser, true);
        }
        return response()->json([
        'success' => '200',
    ]);
    }
  
}
