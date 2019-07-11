<?php $__env->startSection('conteudo'); ?>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Produtos <a href="produto/create"><button class="btn btn-success">Novo</button></a></h3>
		<?php echo $__env->make('produto.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Preço</th>
					<th>Status</th>
				</thead>
               <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($prod->id); ?></td>
					<td><?php echo e($prod->nome); ?></td>
					<td><?php echo e($prod->descricao); ?></td>
					<td><?php echo e($prod->preco); ?></td>
					<td><?php echo e($prod->status); ?></td>
					
					<td>
						<a href="<?php echo e(URL::action('ProdutoController@edit',$prod->id)); ?>"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-<?php echo e($prod->id); ?>" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
					</td>
				</tr>
				<?php echo $__env->make('produto.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
		</div>
		<?php echo e($produtos->render()); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_vendas_crud_simples\resources\views/produto/index.blade.php ENDPATH**/ ?>