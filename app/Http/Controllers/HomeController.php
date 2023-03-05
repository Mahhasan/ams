<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_member = Member::where('status', '=', 'Approved')->count();
        $pending_member = Member::where('status', '=', 'Pending')->count();
        $form_hide = Member::where('members.user_id',Auth::user()->id)->count();
        $member_data = Member::where('members.user_id',Auth::user()->id)->first();
        $is_paid = Member::where('members.user_id',Auth::user()->id)->where('members.status','Approved')->count();
        return view('home',compact('total_member','pending_member','form_hide','is_paid','member_data'));
    }
}
