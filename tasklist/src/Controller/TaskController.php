<?php

namespace App\Controller;

use App\Controller\AppController;

class TaskController extends AppController
{
	
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Flash'); // Include the FlashComponent
	}
	
	public function index()
	{
		$this->set("tasks", $this->Task->find("all")->contain(['Statustask']));
	}
	
	public function add()
	{
		$task = $this->Task->newEntity();
		if($this->request->is('post')){
			$task = $this->Task->patchEntity($task, $this->request->getData());
			$task->datacriacao = date("Y-m-d H:i:s");
			if($this->Task->save($task)){
				$this->Flash->success("Tarefa adiconada com sucesso!", ['key'=>'message']);
				return $this->redirect(['action'=>'index']);
			}
			$this->Flash->error(__("Tarefa não adiconada"));
		}
		$this->set('task',$task);
		$this->loadModel('Statustask');
		$statustask = $this->Statustask->find();
		$statustask->formatResults(function(\Cake\Datasource\ResultSetInterface $results) {
    		return $results->combine('id', 'status');
		});
		$this->set('statustasks',$statustask->all());
	}
	
	public function view($id = null)
	{
		$task = $this->Task->get($id, ['contain' => ['Statustask']]);
		$this->set("task", $task);
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
		$this->loadModel('Statustask');
		$statustask = $this->Statustask->find();
		$statustask->formatResults(function(\Cake\Datasource\ResultSetInterface $results) {
			return $results->combine('id', 'status');
		});
			$this->set('statustasks',$statustask->all());
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
