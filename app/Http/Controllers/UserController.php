<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Termwind\render;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        /**Veriricar se é master e retornar todos os usuários 
         * em testes sempre deixo master com login "oclicksltda"
         * 
        */
        if (Auth::user()->login == 'oclicksltda') {
            return Inertia::render(
                'Dashboard/list-users',
                [
                    'titulo' => 'Gerenciar Usuários',
                    'users' => User::all()->map(fn ($user) => [
                        'id' => $user->id,
                        'name' => $user->name,
                        'login' => $user->login,
                        'email' => $user->email,
                        'tipo' => $user->tipo,
                        'created_by' => $user->created_by,
                        'created_at_year' => $user->created_at->format('d/m/Y'),
                        'created_at_hours' => $user->created_at->format('H:m'),
                    ])
                ]
            );
        } else {
        /**retorna somente usuários cadastrados pelo cliente (tipo 1) e match com seu id */    
            return Inertia::render(
                'Dashboard/list-users',
                [

                    'titulo' => 'Gerenciar Usuários',
                    'users' => User::all()->except(Auth::id())->where('created_by', Auth::id())->map(fn ($user) => [
                        'id' => $user->id,
                        'name' => $user->name,
                        'login' => $user->login,
                        'email' => $user->email,
                        'tipo' => $user->tipo,
                        'created_by' => $user->created_by,
                        'created_at_year' => $user->created_at->format('d/m/Y'),
                        'created_at_hours' => $user->created_at->format('H:m'),

                    ])

                ]
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return Inertia::render('Dashboard/users-register', ['titulo' => 'Registrar Usuários']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        /**verificar se o cadastro está sendo feito pelo formulario web ou pelo portal
         * insere em (created_by) 'web', vindo da form, se for pelo web 
         * insere id em (created_by) se for criado pelo portal
         */
        if (Auth::check()) {
            $user =  Auth::id();
            $request->merge(['created_by' => $user]);
            $data = $request->all();

            User::create($data);
            return redirect('ListUsers');
        } else {
            $data = $request->all();
            User::create($data);
            return redirect('dashboard');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
