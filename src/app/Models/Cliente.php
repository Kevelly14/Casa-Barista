<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

Class Cliente extends Model{

protected $table = 'tbl_cliente';
protected $primaryKey = 'id_cliente';

public $timestamps = true;

const CREATE_AT = 'data_criacao_cliente';
const UPDATE_AT = 'data_atualizacao_cliente';

// fillable é os campos q pode alterar 
protected $fillable = [
    'nome_cliente',
    'email_cliente',
    'senha_cliente',
    'foto_cliente',
    'status_cliente',
];

// Relacionamento um CLIENTE pertence a muitos DEPOIMENTOS 
// hasMany = muitos
public function ClienteDepoimento(){
    return $this->hasMany(Depoimento::class, 'id_cliente', 'id_cliente');
}


}
