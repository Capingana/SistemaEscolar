<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        //
        $users=User::all();
        $classes=Classe::all();
        $page = "Página";
        $other_page = "Página Administrativa";
        return view('dashboard', compact('page', 'other_page','users','classes'));
    }
}
