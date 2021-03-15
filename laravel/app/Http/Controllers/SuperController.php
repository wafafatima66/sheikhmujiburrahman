<?php

namespace App\Http\Controllers;

use App\Super;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        // $this->middleware('factorchecker');
    }

    public function superAdmin()
    {
        $usertype = Auth::user()->userType;
        if ($usertype === 999) {
        $allusers = User::all();
        $shut = Super::first();
        return view('dashboard.superAdmin', compact('allusers','shut'));
        } else {
           abort(404);
        }
    }
    public function shutdown($status)
    {
        $usertype = Auth::user()->userType;
        if ($usertype === 999) {
        $value = Super::first();
        $value->shutDown = $status;
        $value->save();
        return back();
        }else{
            abort(404);
        }
    }
}
