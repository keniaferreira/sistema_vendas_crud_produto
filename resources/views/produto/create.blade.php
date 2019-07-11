@extends('layouts.layout')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Novo Produto</h3>
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


			{!!Form::open(array('url'=>'/produto','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
            {{Form::token()}}

            <div class="row">
            	
            	<div class="col-lg-6 col-sm-6 col-xs-12">
	            	<div class="form-group">
	            	<label for="nome">Nome</label>
	            	<input type="text" name="nome" required value="{{old('nome')}}" class="form-control" placeholder="Nome...">
	            	</div>
            	</div>
            		
            	
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="codigo">Descrição</label>
	            	<input type="text" name="descricao" required value="{{old('descricao')}}" class="form-control" placeholder="Descrição do Produto...">
	            	</div>
            		
            	</div>
            		
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="estoque">Preço</label>
	            	<input type="text" name="preco" required value="{{old('preco')}}" class="form-control" placeholder="00,00">
	            	</div>	
            		
            	</div>

            </div>

            
           
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Limpar</button>
            </div>

			{!!Form::close()!!}		
            
		
@stop