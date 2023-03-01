<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\Members;

class UserController extends Controller
{
    //
    public function user_profile()
    {
        return view('user.profile');
    }

    public function membership_form()
    {
        return view('user.membership_form');
    }

    public function create_membership(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'organization' => ['required', 'string', 'max:255'],
            // 'country' => ['required', 'string', 'max:255'],
        ]);
        $member = new Members([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
        ]);
        $member->save();
        return redirect('/membership-form')->with('success', 'Information successfully Submitted');
    }
}
