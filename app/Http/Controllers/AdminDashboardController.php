<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    /**
     * @return Admin Dashboard Index View
     *
     */
    public function index(){
        return view('admin.dashboard',compact('dashboard_title','band_name'));
    }
}
