<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\Member;

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
        $member = new Member([
            'user_id' => $request['user_id'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'number' => $request['number'],
            'status' => $request['status'],
        ]);
        $member->save();
        return redirect('/membership-form')->with('success', 'Information successfully Submitted');
    }

    public function pending_member_list()
    {
        $pending_members = Member::where('status', "Pending")->get();
        return view('pending_member_list',compact('pending_members'));
    }
}
