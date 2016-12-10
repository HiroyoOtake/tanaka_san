<?php

class ProfitsController extends AppController {

	public function index() {
		$this->set('profits', $this->Profit->find('all'));
	}
	
	public function view($id = null) {
		if (!$this->Profit->exists($id)) {
			throw new NotFoundException('レストランがみつかりません');
		}

		$this->set('profit', $this->Profit->findById($id));
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Profit->create();

			if($this->Profit->save($this->request->data)) {
				$this->Flash->success('売上金額を登録しました');
				return $this->redirect(['action' => 'index']);
			}
		}
	}

} 
