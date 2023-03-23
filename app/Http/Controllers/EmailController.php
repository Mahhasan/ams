<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Mail\EmailMarketing;
use Mail;
class EmailController extends Controller
{
    public function index(Request $request)

    {

        $users = User::select("*")->get();

        return view('email_marketing', compact('users'));

    }


    public function sendEmail(Request $request)

    {

        $users = User::whereIn("id", $request->ids)->get();
        //dd($users);

        foreach ($users as $user) {

            Mail::to($user->email)->send(new EmailMarketing($user));

        }

        return response()->json(['success'=>'Send email successfully.']);

    }
}
