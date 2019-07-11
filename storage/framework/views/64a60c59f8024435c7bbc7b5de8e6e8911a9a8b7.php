<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-<?php echo e($prod->id); ?>">
	<?php echo e(Form::Open(array('action'=>array('ProdutoController@destroy',$prod->id),'method'=>'delete'))); ?>

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <h4 class="modal-title">Apagar Produto</h4>
                 <button type="button" class="button-close text-right" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">x</span>
                 </button>
			</div>
			<div class="modal-body">
				<p>Confirme se deseja apagar o produto</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	<?php echo e(Form::Close()); ?>


</div><?php /**PATH C:\xampp\htdocs\sistema_vendas_crud_simples\resources\views/produto/modal.blade.php ENDPATH**/ ?>