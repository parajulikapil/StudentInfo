<?php

namespace App\Http\Controllers\user;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserHomePageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userData= Auth::user();
        return view('user.welcome',compact('userData'));
    }
}
