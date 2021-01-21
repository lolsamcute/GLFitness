<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\BecomeAMember;
use Illuminate\Support\Facades\Auth;

class MarketersController extends Controller
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



    public function home()
    {

        $become_a_member = BecomeAMember::all();

        $become_a_memberCount = BecomeAMember::where('marketer_name', '=', Auth::user()->name)->count();

        return view('marketer.home', [

            'become_a_member' => $become_a_member,
            'become_a_memberCount' => $become_a_memberCount,

         ]);
    }


    public function member()
    {


        $become_a_member = BecomeAMember::where('marketer_name', '=', Auth::user()->name)->get();

        return view('marketer.member', [

            'become_a_member' => $become_a_member,

         ]);
    }

}
