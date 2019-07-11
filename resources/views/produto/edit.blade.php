@extends('layouts.layout')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Produto: {{ $produto->nome }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
</div>

			{!!Form::model($produto, ['method'=>'PATCH', 'route'=>['produto.update', $produto->id], 'files'=>'true'])!!}
			{{Form::token()}}

           <div class="row">
            	
            	<div class="col-lg-6 col-sm-6 col-xs-12">
	            	<div class="form-group">
	            	<label for="nome">Nome</label>
	            	<input type="text" name="nome" required value="{{$produto->nome}}" class="form-control" placeholder="Nome...">
	            	</div>
            	</div>
            		
            	
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="codigo">Descrição</label>
	            	<input type="text" name="descricao" required value="{{$produto->descricao}}" class="form-control" placeholder="Descrição do Produto...">
	            	</div>
            		
            	</div>
            		
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="estoque">Preço</label>
	            	<input type="text" name="preco" required value="{{$produto->preco}}" class="form-control" placeholder="00,00">
	            	</div>	
            		
            	</div>

            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		 <div class="form-group">
            	<label for="descricao">Status</label>
            	<input type="text" value="{{$produto->status}}" name="status" class="form-control" placeholder="Status...">
            		</div>
            		
            	</div>

            </div>

            
           
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="clear">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
	
@stop