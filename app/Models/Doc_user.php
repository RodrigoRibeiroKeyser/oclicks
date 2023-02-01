<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_user extends Model
{
    use HasFactory;

    protected $table = 'doc_users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [

        "doc_id",
        "dataContrat",
        "setor",
        "cpf",
        "rg",
        "ctps",
        "tituloEleitoral" ,
        "cnh" ,
        "cerReserv" ,
        "escolaridade" ,
        "address" ,
        "numero" ,
        "cep" ,
        "bairro",
        "city",
        "dataAdd",
        "personR",
        "phone",
        "phone2",
        "complemento",
        "selected",
        "escalas",
        "prof",
        "pis" ,
        'orgEmissor',
        'uf',

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
