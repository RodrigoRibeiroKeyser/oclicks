<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Models\Doc_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        /**retorna somente usuários cadastrados pelo cliente (tipo 1) e match com seu id */
        if (User::all()->where('created_by', Auth::id())) {
            return Inertia::render(
                'Dashboard/list-users',
                [

                    'titulo' => 'Gerenciar Usuários',
                    'users' => User::all()->where('created_by', Auth::id())->map(fn ($user) => [
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
            return Inertia::render(
                'Dashboard/list-users',
                [

                    'titulo' => 'Gerenciar Usuários',
                    'users' => null
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
        /**
         * insere id em (created_by) 
         */
        if (Auth::check()) {
            
            $user = User::create([
                'name' => $request->name,
                'password' => $request->password,
                'email' => $request->email,
                'login' => $request->login,
                'tipo' =>$request->tipo,    
                'created_by' => Auth::id(),
            ]);
            $user->docUser()->create([
                'dataContrat' => $request->dataContrat,
                'setor' => $request->setor,
                'cpf' => $request->cpf,
                'rg' => $request->rg,
                'ctps' => $request->ctps,
                'tituloEleitoral' => $request->tituloEleitoral,
                'cnh' => $request->cnh,
                'cerReserv' => $request->cerReserv,
                'escolaridade' => $request->escolaridade,
                'address' => $request->address,
                'numero' => $request->numero,
                'cep' => $request->cep,
                'bairro' => $request->bairro,
                'city' => $request->city,
                'uf' => $request->uf,
                'orgEmissor' => $request->orgEmissor,
                'dataAdd' => $request->dataAdd,
                'personR' => $request->personR,
                'phone' => $request->phone,
                'phone2' => $request->phone2,
                'complemento' => $request->complemento,
                'selected' => $request->selected,
                'escalas' => $request->escalas,
                'prof' => $request->prof,
                'pis' => $request->pis,
                'pis' => $request->setor,

            ]);
            
        }else{
            return with('message','erro no sistema'); 
        };
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
