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

			$profit = $this->Profit->find('first', [
				'conditions' => [
				      'date' => date('Y-m-d')
				      ]
				]);

			if ($profit) {
				$this->Flash->error('この日付は既に登録されています。');
				$this->redirect(['action' => 'index']);
				return;
			}

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

	public function add_cost() {
		if ($this->request->is('post')) {

			$profit = $this->request->data;
			$cost = $profit['Profit']['cost'];

			$profit = $this->Profit->find('first', [
				'conditions' => [
				      'date' => date('Y-m-d')
				      ]
				]);
			
			$profit['Profit']['cost'] = $cost;
			
			$result = $this->Profit->save($profit); 

			if($result) { 			
				$this->Flash->success('諸経費を登録しました');
				$this->redirect(['action' => 'index']);
				return;
			}
		}
	}

	public function add_cost_breakdown() {
		if ($this->request->is('post')) {

			$breakdown = $this->request->data;

			$this->Profit->create(); 
			$result = $this->Cost->save($breakdown); 

			if($result) { 			
				$this->Flash->success('諸経費の内訳を登録しました');
				$this->redirect(['action' => 'index']);
				return;
			}  
		}
	} 
} 
