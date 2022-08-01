<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ECP;
use App\Models\Candidate;

class ECPController extends Controller
{
    public function index()
    {
        return view('frontend.ECPRegister');
    }
    public function register()
    {
        return view('frontend.ECPRegister');
    }


    public function login()
    {
        return view('frontend.ECPLogin');
    }
    public function dashboard(Request $req)
    {
        $req->validate([
            'cnic' => 'required',
            'password' => 'required'
        ]);


        $candidates = Candidate::all();
        $ecps = ECP::all();
        $Ecpcnic = $req->cnic;
        $ECPpass = $req->password;

        foreach ($ecps as $ecp) {
            if ($ecp->cnic == $Ecpcnic && $ecp->password == $ECPpass) {
                return view('frontend.ECPDashboard', compact('candidates'));
            }
        }
        return back()->withInput()->withErrors(['wrong credentials']);
    }

    public function approveCandidate($id)
    {
        $single_candidate = Candidate::find($id);
        $single_candidate->isApproved = true;
        $single_candidate->save();
        return redirect('/ECPDashboard');
    }
    public function deletPost($id)
    {
        $single_candidate = Candidate::find($id);
        $single_candidate->isApproved = TRUE;
        $single_candidate->save();
        return redirect('/ECPDashboard');
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

        $ecp = new ECP;
        $ecp->name  = $req->name;
        $ecp->cnic  = $req->cnic;
        $ecp->email  = $req->email;
        $ecp->phone  = $req->phone;
        $ecp->password  = $req->password;
        $ecp->save();
        return redirect('/ECPLogin');
    }

    public function validateECP(Request $reqs)
    {
        $ecp = new ECP;
        if ($ecp->cnic == $reqs->cnic && $ecp->password == $reqs->password) {
            return redirect('/ECPDashboard');
        }
    }
}
