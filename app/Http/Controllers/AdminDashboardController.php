<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    /**
     * @return Admin Dashboard Index View
     *
     */

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }


    public function index(){
        return view('admin.dashboard',compact('dashboard_title','band_name'));
    }
}
