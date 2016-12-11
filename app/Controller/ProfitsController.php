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
			$this->Profit->create(); //insurtの準備
			$result = $this->Profit->save($this->request->data); //insurtもupdateもsaveを使う
			  	// こういう形のデータを保存  $this->Profit->save(['Profit'=> ['earnings' => 1]]); 

			$profit = $this->request->data;
			$earnings = $profit['Profit']['earnings'];

			if($result) { 			
				$sql = "select MAX(id) from profits"; //あとでログイン機能を付けたときに,メンバーIDで条件付けする 
				$array = $this->Profit->query($sql);
				$id = $array[0][0]['MAX(id)'];

				$now = date('Y-m-d');

				$this->Profit->create(); 
				$this->Profit->save(['Profit' => ['id' => $id,'date' => $now]]); 

				$this->Flash->success('売上金額を登録しました');
				$this->redirect(['action' => 'index']);
				return;
			}
		}
	}

} 
