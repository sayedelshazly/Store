<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');

        /* return view('dashboard', [ //how to send variable to the blade 
            'user' => 'sayed', 
            ]);  //send variable called sayed to the blade view

            //
        */
    }
}
