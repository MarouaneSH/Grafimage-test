<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Mail;
use App\Mail\NewInscription;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function inscription(Request $request){
        $request->validate([
            "email"=> "required|email|max:100",
            "hour_passage"=> "required|regex:[[0-9]{2}:[0-9]{2}]",
            "nbr_participant"=> "required|numeric",
            'phone' => 'required|regex:/(06)[0-9]{8}/',
            'team_leader' => 'required|string|max:60',
            'team_name' => 'required|string|max:60',
        ]);

        $inscription = Registration::create($request->except('settlement'));
        Mail::to($inscription->email)->send(new NewInscription($inscription));

        return response()->json(["success"]);
    }
}
