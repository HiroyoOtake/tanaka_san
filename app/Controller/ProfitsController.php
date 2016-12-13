<?php

class ProfitsController extends AppController {

	public function index() {
		$this->Profit->create(); //insurtの準備
		$this->set('profits', $this->Profit->find('all'));
	}
	
	public function view($id = null) {
		if (!$this->Profit->exists($id)) {
			throw new NotFoundException('レストランがみつかりません');
		}

		$this->set('profit', $this->Profit->findById($id)); //1レコード分のデータ
	}
	
	public function add() {
		if ($this->request->is('post')) {

			$profit = $this->request->data;
			$profit['Profit']['date'] = date('Y-m-d');

			$this->Profit->create(); 
			$result = $this->Profit->save($profit); 

			if($result) { 			
				$this->Flash->success('売上金額を登録しました');
				$this->redirect(['action' => 'index']);
				return;
			}
		}
	}

} 
