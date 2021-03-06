<div class="row">
	<div class="col-sm-12">
		<?php echo $this->Flash->render("message"); ?>
		<h2>Visualização das tarefas</h2>
	</div>
	<div class="col-sm-12">
		<?php echo $this->Html->link("Nova tarefa", ['action'=>'add'], ['class'=>'btn btn-primary']); ?>
	</div>
	<div class="col-sm-12">
		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Título</th>
		      <th>Descrição</th>
		      <th>Status</th>
		      <th>Data/Hora Criação</th>
		      <th>Ações</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if(!empty($tasks)): ?>
		  		<?php foreach($tasks as $task): ?>
				    <tr>
				      <td><?php echo $task->id; ?></td>
				      <td><?php echo $task->titulo; ?></td>
				      <td><?php echo $task->descricao; ?></td>
				      <td><?php echo $task->statustask->status; ?></td>
				      <td><?php echo date("d/m/Y H:i:s",strtotime($task->datacriacao)); ?></td>
				      <td>
				      	<?php echo $this->Html->link("View", ['action'=>'view',$task->id], ['class'=>'btn btn-primary']); ?>
				      	<?php echo $this->Html->link("Edit", ['action'=>'edit',$task->id], ['class'=>'btn btn-success']); ?>
				      	<?php echo $this->Form->postLink("Delete", ['action'=>'delete',$task->id], ['confirm' => 'Deseja mesmo apagar a tarefa?','class'=>'btn btn-danger']); ?>
				      </td>
				    </tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
				      <td>Não há registros cadastrados.</td>
				</tr>
			<?php endif; ?>
		  </tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<h2>Visualização das tarefas - REST API</h2>
	</div> 
	<div class="col-sm-12">
		<table id="rest-api-table" class="table table-striped table-hover">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Título</th>
		      <th>Descrição</th>
		      <th>Status</th>
		      <th>Data/Hora Criação</th>
		      <th>Ações</th>
		    </tr>
		  </thead>
		  <tbody>
		  </tbody>
		</table>
	</div>
</div>
<?php echo $this->Html->script('task.index.js'); ?>
