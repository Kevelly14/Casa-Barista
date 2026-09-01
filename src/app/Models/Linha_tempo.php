<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

Class Linha_tempo extends Model{

protected $table = 'tbl_linha_tempo';
protected $primaryKey = 'id_linha_tempo';

public $timestamps = true;

const CREATE_AT = 'data_criacao_linha_tempo';
const UPDATE_AT = 'data_atualizacao_linha_tempo';

// fillable é os campos q pode alterar 
protected $fillable = [
    'titulo_linha_tempo',
    'ano_linha_tempo',
    'descricao_linha_tempo',
    'status_linha_tempo',
];

}
