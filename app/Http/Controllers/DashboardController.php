<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        //
        $users=User::all();
        $turmas=Turma::all();
        $classes=Classe::all();
        $page = "Página";
        $other_page = "Página Administrativa";
        return view('dashboard', compact('page', 'other_page','users','classes','turmas'));
    }
}
