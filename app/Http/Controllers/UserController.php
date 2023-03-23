<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\MembershipCategory;
use Mail;
use App\Mail\MembershipFormSubmissionMail;
use App\Mail\MembershipRequestMail;
use DB;

class UserController extends Controller
{
    //
    public function user_profile()
    {
        $users = User::where('users.id',Auth::user()->id)->first();
        $members = Member::where('members.user_id',Auth::user()->id)->first();
        $is_paid = Member::where('members.user_id',Auth::user()->id)->where('members.status','Approved')->count();
        return view('user.profile',compact('users','members','is_paid'));
    }

    public function update_user_profile(Request $request){
        $data = Member::where('user_id', Auth::user()->id)->first();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->number = $request->number;
        $data->designation = $request->designation;
        $data->organization_name = $request->organization_name;
        // $data->email = $request->email;
        $data->affiliation = $request->affiliation;
        $data->country = $request->country;
        $data->org_address = $request->org_address;
        $data->save();
        return redirect('/profile')->with('success', 'Profile Update successfully');
    }
    public function update_bio(Request $request){
        $data = User::where('id', Auth::user()->id)->first();
        $data->bio = $request->bio;
        $data->save();
        return redirect('/profile')->with('success', 'Bio Update successfully');
    }

    public function update_Admin_profile(Request $request){
        $data = User::where('id', Auth::user()->id)->first();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->number = $request->number;
        $data->address = $request->address;
        $data->save();
        return redirect('/profile')->with('success', 'Profile Update successfully');
    }

    public function update_profile_pic(Request $request){
        $data = User::where('id', Auth::user()->id)->first();
        $input = $request->all();

        if ($image = $request->file('profile_pic')) {

            $destinationPath = 'img/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['profile_pic'] = "$profileImage";

        }else{

            unset($input['profile_pic']);

        }
          
        $data->update($input);
        return redirect('/profile')->with('success', 'Profile Updated successfully');
    }


    public function membership_form()
    {
        $users = User::where('users.id',Auth::user()->id)->first();
        $membership_category = MembershipCategory::all();
        $form_hide = Member::where('members.user_id',Auth::user()->id)->count();
        return view('user.membership_form',compact('membership_category','form_hide','users'));
    }

    public function create_membership(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
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
            'membership_category' => $request['membership_category'],
            'membership_price' => $request['membership_price'],
        ]);
        $member->save();

        // Mail::to('fgs.se2@daffodilvarsity.edu.bd')->send(new MembershipRequestMail([$member]));
        Mail::to($member->user->email)->send(new MembershipFormSubmissionMail([$member]));

        return redirect('/home')->with('success', 'Information successfully Submitted');
    }

    public function profileCompletionPercentage()
    {
        $user = auth()->user();
        $member = $user->member;

        // Determine the total number of fields in the members table
        $totalFields = 16;

        // Determine the number of fields that have been filled by the user
        $filledFields = 0;
        if (!is_null($member->first_name)) {
            $filledFields++;
        }
        if (!is_null($member->last_name)) {
            $filledFields++;
        }
        
        if (!is_null($member->email)) {
            $filledFields++;
        }
        if (!is_null($member->number)) {
            $filledFields++;
        }
        if (!is_null($member->date)) {
            $filledFields++;
        }
        if (!is_null($member->designation)) {
            $filledFields++;
        }
        if (!is_null($member->department)) {
            $filledFields++;
        }
        if (!is_null($member->organization_name)) {
            $filledFields++;
        }
        if (!is_null($member->business_type)) {
            $filledFields++;
        }
        if (!is_null($member->registration_number)) {
            $filledFields++;
        }
        if (!is_null($member->org_email)) {
            $filledFields++;
        }
        if (!is_null($member->org_address)) {
            $filledFields++;
        }
        if (!is_null($member->affiliation)) {
            $filledFields++;
        }
        if (!is_null($member->country)) {
            $filledFields++;
        }
        if (!is_null($member->membership_category)) {
            $filledFields++;
        }
        if (!is_null($member->membership_price)) {
            $filledFields++;
        }
        if (!is_null($member->profile_pic)) {
            $filledFields++;
        }

        // Calculate the percentage of profile completion
        $percentage = round(($filledFields / $totalFields) * 100);

        return $percentage;
    }


    public function pending_member_list()
    {
        $pending_members = Member::where('status', "Pending")->get();
        return view('pending_member_list',compact('pending_members'));
    }

    public function member_list()
    {
        $members = Member::where('status', "Approved")->get();
        return view('member_list',compact('members'));
    }
    public function membership_category()
    {
        $membership_category = MembershipCategory::where('status', "Approved")->get();
        return view('member_list',compact('members'));
    }
    
    public function member_details($id)
    {
        $member_details = Member::find($id);
        return view('member_details',compact('member_details'));
    }

    public function member_status(Request $request, $id)
    {
        $currentDate = Carbon::now();
        $expiryDate = Carbon::now()->addDays(30); // or whatever expiry date calculation you need

        $data = Member::find($id);
        $data->status = $request->status;
        $data->current_date = $currentDate;
        $data->expiry_date = $expiryDate;
        $data-> save();

        return redirect()->route('member_details',$data->id)->with('success', 'Status Updated successfully');
    }
}
