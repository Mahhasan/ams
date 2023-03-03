<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

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
        return view('home',compact('total_member','pending_member',));
    }
}
