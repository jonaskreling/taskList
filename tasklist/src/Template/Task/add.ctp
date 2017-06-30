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
			<br/>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
				      <div class="col-lg-10">
				        <?php echo $this->Form->input('descricao', ['class'=>'form-control', 'rows'=>3, 'Placeholder'=>'Descrição']); ?>
				      </div>
				    </div>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
				      <div class="col-lg-10">
				      	<label for="select" class="col-lg-2 control-label">Status</label>
				        <?php echo $this->Form->select('statustask_id', $statustasks, ['empty' => '-- Status --', 'class'=>'form-control', 'Placeholder'=>'Status']); ?>
				      </div>
				    </div>
				</div>
			</div>
			<br/>
			<br/>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
				      <div class="col-lg-10">
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