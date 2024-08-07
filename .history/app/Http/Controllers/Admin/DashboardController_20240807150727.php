<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function index(){
        // return view('dashboard');
        return View::make('dashboard'); //class View with method make()

        /* return view('dashboard', [ //how to send variable to the blade 
            'user' => 'sayed', 
            ]);  //send variable called sayed to the blade view

            -another way with the compact method compact() // return array of variables and there values
            $user = 'sayed';
            return view('dashboard', compact('user'));

            -another way 
            return view('dashboard')->with([
            'user' => 'sayed', 
            ]);

        */
    }
}
