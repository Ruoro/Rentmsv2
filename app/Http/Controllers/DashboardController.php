<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
      if(Auth::user()->hasRole('tenant')){
        return view ('tenantdash');
      }elseif (Auth::user()->hasRole('owner')) {
        return view ('ownerdash');
      }elseif (Auth::user()->hasRole('admin')) {
        return view ('admindash');
    }
}
}
