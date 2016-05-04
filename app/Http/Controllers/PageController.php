<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{

    public function getHome()
    {
        $users = User::all();
        
        return view('pages.main', compact('users'));
    }
}
