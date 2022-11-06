<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loan()
    {
        return view('pages.loan');
    }

}
