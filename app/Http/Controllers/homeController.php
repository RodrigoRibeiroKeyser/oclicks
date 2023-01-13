<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class homeController extends Controller
{
  public function index(){
    return Inertia::render('home');
  }  
  public function planos(){
    return Inertia::render('planos');
  }
  public function login(){
    return Inertia::render('login');
  }
  public function register(){
    return Inertia::render('register');
  }
 
  
 
};
