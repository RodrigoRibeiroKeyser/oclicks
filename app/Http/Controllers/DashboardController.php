<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function homeDashboard(){
       
        return Inertia::render('Dashboard/home-dashboard',['titulo' => 'Controle de Ponto']);
      
    }
    public function userRegisterShow(){
        return Inertia::render('Dashboard/users-register', ['titulo' => 'Registrar Usuários']);

    }


}
