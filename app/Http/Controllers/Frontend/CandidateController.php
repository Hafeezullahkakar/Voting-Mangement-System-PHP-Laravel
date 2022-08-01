<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;
use Symfony\Contracts\Service\Attribute\Required;

class CandidateController extends Controller
{
    public function index()
    {
        return view('frontend.CandidateReg');
    }
    public function login()
    {
        return view('frontend.CandidateLogin');
    }
    public function dashboard(Request $resqust)
    {
        $resqust->validate([
            'cnic' => 'required',
            'password' => 'required',
        ]);
        $candidates = Candidate::all();
        $cnic = $resqust->cnic;
        $pass = $resqust->password;
        foreach ($candidates as $candidate) {
            if ($candidate->cnic == $cnic && $candidate->password == $pass) {
                return view('frontend.CandidateDashboard', compact('candidates', 'cnic'));
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
            'symbol' => 'required',
        ]);

        $name = $req->file('symbol')->getClientOriginalName();
        $path = $req->file('symbol')->store('public/images');
        $candidate = new Candidate;
        $candidate->name  = $req->name;
        $candidate->cnic  = $req->cnic;
        $candidate->email  = $req->email;
        $candidate->phone  = $req->phone;
        $candidate->password  = $req->password;
        $candidate->noOfVotes  = 0;
        $candidate->isApproved  = false;
        if ($req->hasFile('symbol')) {
            $file = $req->file('symbol');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/', $fileName);
            $candidate->symbol  = $fileName;
        }
        $candidate->save();
        return redirect('/CandidateLogin');
    }
}
