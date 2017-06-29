<?php echo $this->Form->create($task); ?>
<div class="row">
	<div class="col-sm-12">
		<fieldset>
		    <legend>Nova tarefa</legend>
		    <div class="row">
		    	<div class="col-sm-12">
				    <div class="form-group">
				      <div class="col-lg-10">
				        <?php echo $this->Form->input('titulo', ['class'=>'form-control', 'Placeholder'=>'Título']); ?>
				      </div>
				    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
				      <div class="col-lg-10">
				        <?php echo $this->Form->input('descricao', ['class'=>'form-control', 'Placeholder'=>'Descrição']); ?>
				      </div>
				    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
				      <div class="col-lg-10 col-lg-offset-2">
				      	<?php echo $this->Form->button(__('Add task'), ['class'=>'btn btn-primary']); ?>
				      	<?php echo $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-primary']); ?>
				      </div>
				    </div>
				</div>
			</div>
		</fieldset>
	</div>
</div>
<?php echo $this->Form->end(); ?>