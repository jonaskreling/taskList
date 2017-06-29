<?php

namespace App\Controller;

use App\Controller\AppController;

class TaskController extends AppController
{
	
	public function index()
	{
		$this->set("tasks", $this->Task->find("all"));
	}
	
	public function add()
	{
		$task = $this->Task->newEntity();
		if($this->request->is('post')){
			$task = $this->Task->patchEntity($task, $this->request->getData());
			$task->datacriacao = date("Y-m-d H:i:s");
			$task->statustask_id = 1;
			if($this->Task->save($task)){
				$this->Flash->success("Tarefa adiconada com sucesso!", ['key'=>'message']);
				return $this->redirect(['action'=>'index']);
			}
			$this->Flash->error(__("Tarefa não adiconada"));
		}
		$this->set('task',$task);
	}
	
	public function view($id = null)
	{
		$this->set("task", $this->Task->get($id));
	}
	
	public function edit($id = null)
	{
		$task = $this->Task->get($id);
		if($this->request->is(['post', 'put'])){
            $this->Task->patchEntity($task, $this->request->data);
			if($this->Task->save($task)){
				$this->Flash->success("Tarefa atualizada com sucesso!", ['key'=>'message']);
				return $this->redirect(['action'=>'index']);
			}
			$this->Flash->error(__("Tarefa não atualizada"));
		}
		$this->set("task", $task);
	}
    
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $task = $this->Task->get($id);
        if ($this->Task->delete($task)) {
            $this->Flash->success(__('A tarefa foi apagada.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
	
}
