<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto; //Inserção da Model Produto
use Illuminate\Support\Facades\Redirect; // Para que sejam aceitos os redirecionamentos dentro das rotas
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProdutoFormRequest; //Uso do request criado
use DB; //Uso do banco de dados

class ProdutoController extends Controller
{	
	//Método padrão da classe. Todas as vezes que a classe é chamada, esse método é executado.
    public function __construct(){

    }

    //Visualização dos dados
    public function index(Request $request){

    	//Se request é igual a true
    	if($request){
    		$query=trim($request->get('searchText'));//Vai capturar uma busca. O trim desconsidera os espaços digitados
    		$produtos=DB::table('produto')
    		->where('nome', 'LIKE', '%'.$query.'%') //Buscando qualquer correspondência entre o texto digitado.
    		->where('status', '=', 'ativo') //Vão ser exibidas nessa página somente os produtos ativos.
    		->orderBy('id','desc') //A busca sera ordenada pelo campo id. Vamos visualizar do maior para o menor.
    		->paginate(7); //Exibir 7 itens por página
    		//Retorno da view index que estará dentro da pasta \resources\views\produto
    		return view('produto.index', [
    			//Variável criada acima
    			"produtos"=>$produtos, "searchText"=>$query
    		]);

    	}

    }

    //Criar um produto
    public function create(){

        $categorias=DB::table('produto')
        ->where('status', '=', 'ativo')
        ->get();
        return view("produto.create");
    	
    }

    //Salvar os dados
    public function store(ProdutoFormRequest $request){

    	$produto = new Produto;
    	$produto->nome=$request->get('nome');
    	$produto->descricao=$request->get('descricao');
    	$produto->preco=$request->get('preco');
    	$produto->status='ativo';
    	$produto->save();
    	return Redirect::to('/produto');//Assim que o produto for salvo, redirecionar para o index.
    	
    }

    //Visualização dos produtos
    public function show($id){

    	return view("produto.show",[

    		//Mostrar o campo baseado no id do produto
    		"produto"=>Produto::findOrFail($id)]);
    	
    }

    //Editar um produto
    public function edit($id){

    	return view("produto.edit",[

    		//Mostrar o campo baseado no id do produto
    		"produto"=>Produto::findOrFail($id)]);
    	
    }

    //Atualizar um produto
    public function update(ProdutoFormRequest $request, $id){

    	$produto=Produto::findOrFail($id);
    	$produto->nome=$request->get('nome');
    	$produto->descricao=$request->get('descricao');
    	$produto->preco=$request->get('preco');
    	$produto->update();
    	//Após a atualização, redirecionar para:
    	return Redirect::to('/produto');
    	
    }

    //Deletar um produto
    public function destroy($id){

    	$produto=Produto::findOrFail($id);
    	$produto->status='inativo';
    	$produto->update();
    	//Após a atualização, redirecionar para:
    	return Redirect::to('/produto');
    	
    }
}
