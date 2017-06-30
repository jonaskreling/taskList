<div class="row">
	<div class="col-sm-12">
		<fieldset>
		    <legend>Apresentação da Tarefa</legend>
		    <div class="row">
		    	<div class="col-sm-12 col-md-2">
		    		Título
		    	</div>
		    	<div class="col-sm-12 col-md-8">
				    <?php echo $task->titulo; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-2">
		    		Descrição
		    	</div>
				<div class="col-sm-12 col-md-8">
					<?php echo $task->descricao; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-2">
		    		Status
		    	</div>
				<div class="col-sm-12 col-md-8">
					<?php echo $task->statustask->status; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-2">
		    		Data/hora Criação 
		    	</div>
				<div class="col-sm-12 col-md-8">
					<?php echo date("d/m/Y H:i:s",strtotime($task->datacriacao)); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
				      <div class="col-lg-10 col-lg-offset-2">
				      	<?php echo $this->Html->link('Voltar', ['action'=>'index'], ['class'=>'btn btn-primary']); ?>
				      </div>
				    </div>
				</div>
			</div>
		</fieldset>
	</div>
</div>
<?php echo $this->Form->end(); ?>