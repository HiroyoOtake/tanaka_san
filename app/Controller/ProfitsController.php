<?php

class ProfitsController extends AppController {

	public function index() {
		$this->set('profits', $this->Profit->find('all'));
	}

} 
