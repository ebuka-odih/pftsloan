<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Mail\LoanMain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LoanController extends Controller
{
    public function loan()
    {
        return view('pages.loan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
            'country' => 'nullable',
            'address' => 'nullable',
        ]);
        $loan = new Loan();
        $loan->fname = $request->fname;
        $loan->lname = $request->lname;
        $loan->email = $request->email;
        $loan->phone = $request->phone;
        $loan->country = $request->country;
        $loan->address = $request->address;
        $loan->save();
        Mail::to('support@pftsloan.com')->send(new LoanMain($loan));
        return redirect()->back()->with('success', "Request Sent Successfully, We will get back to you");
    }

}
