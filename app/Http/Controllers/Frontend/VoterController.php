<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Candidate;

class VoterController extends Controller
{
    public function index()
    {
        return view("frontend.VoterReg");
    }
    public function login()
    {
        return view('frontend.VoterLogin');
    }
    public function resutldashboard()
    {
        $candidates = Candidate::all();

        return view('frontend.ResultsDashboard', compact('candidates'));
    }

    public function dashboard(Request $rq)
    {
        $rq->validate([
            'cnic' => 'required',
            'password' => 'required',
        ]);
        $candidates = Candidate::all();
        $Vcnic = $rq->cnic;
        $Vpass = $rq->password;
        $voters = Voter::all();
        $pass = $rq->password;
        foreach ($voters as $voter) {
            if ($voter->cnic == $Vcnic && $voter->password == $Vpass) {
                return view('frontend.VoterDashboard', compact('candidates', 'voters', 'Vcnic'));
            }
        }
        return back()->withInput()->withErrors(['wrong credentials']);
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'cnic' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        $voter = new Voter;
        $voter->name  = $req->name;
        $voter->cnic  = $req->cnic;
        $voter->email  = $req->email;
        $voter->phone  = $req->phone;
        $voter->password  = $req->password;
        $voter->voted  = false;
        $voter->save();

        return redirect('/VoterLogin');
    }

    public function votecandidate($id)
    {
        $single_candidate = Candidate::find($id);
        $single_candidate->noOfVotes =  $single_candidate->noOfVotes + 1;
        $single_candidate->save();
        return redirect('/results');
    }


}
