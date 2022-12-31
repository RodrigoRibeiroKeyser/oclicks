<?php

namespace App\Http\Controllers;

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
  public function formLogin(request $request){
    dd($request);
  }
};
