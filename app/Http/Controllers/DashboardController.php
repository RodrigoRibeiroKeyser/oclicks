<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function homeDashboard(){      
      
        return Inertia::render('Dashboard/home-dashboard',['titulo' => 'Controle de Ponto']);
            
    }
    
    public function profileEdit(){

        return Inertia::render('Dashboard/profile-edit', ['titulo' => 'Perfil e Configurações']);

    }
}
