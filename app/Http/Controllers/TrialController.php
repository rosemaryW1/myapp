<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TRIAL;

class TrialController extends Controller
{
    public function Trial(){
        return view('Trial');
    }
}
