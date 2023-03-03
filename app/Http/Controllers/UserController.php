<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\Member;
use App\Models\MembershipCategory;

class UserController extends Controller
{
    //
    public function user_profile()
    {
        return view('user.profile');
    }

    public function membership_form()
    {
        $membership_category = MembershipCategory::all();
        return view('user.membership_form',compact('membership_category'));
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
            'date'=> $request['date'],
            'designation' => $request['designation'],
            'department' => $request['department'],
            'organization_name' => $request['organization_name'],
            'business_type' => $request['business_type'],
            'registration_number' => $request['registration_number'],
            'org_email' => $request['org_email'],
            'org_address' => $request['org_address'],
            'affiliation' => $request['affiliation'],
            'country' => $request['country'],
            'categroy_name' => $request['categroy_name'],
        ]);
        $member->save();
        return redirect('/membership-form')->with('success', 'Information successfully Submitted');
    }

    public function pending_member_list()
    {
        $pending_members = Member::where('status', "Pending")->get();
        return view('pending_member_list',compact('pending_members'));
    }

    public function member_list()
    {
        $members = Member::where('status', "Approve")->get();
        return view('member_list',compact('members'));
    }
    public function membership_category()
    {
        $membership_category = MembershipCategory::where('status', "Approve")->get();
        return view('member_list',compact('members'));
    }
    
    public function member_details()
    {
        $member_details = Member::all();
        return view('member_details',compact('member_details'));
    }

    // public function member_status(Request $request, $id)
    // {
    //     $data = Member::find($id);
    //     $data->status = $request->status;
    //     $data-> save();

    //     return redirect()->route('member_details',$data->id)->with('success', 'Status Updated successfully');
    // }
}
