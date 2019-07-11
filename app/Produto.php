<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //

    protected $table = 'produto'; // Setando a tabela criada no Banco de dados
	protected $primarykey = 'id'; // setando a primary key da tabela produto

	public $timestamps = true; // Registra data e hora da criação e atualização dos registros da tabela produto
	
	//carrega os campos da tabela produto
	protected $fillable = [

		'nome',
		'descricao',
		'preco',
		'status'


	]; 

	protected $guarded = []; // Trabalhar com dados salvos
}
