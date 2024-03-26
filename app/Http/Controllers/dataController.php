<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class dataController extends Controller
{
    //
    public function index(Request $request)
    {                
        return view('dashboard.index');
    }
}
