<?php

class Profit extends AppModel {
	public $validate = [
		'earnings' => [
			[
			'rule' => ['notBlank'],
			'message' => '利益を入力して下さい'
			],
			[
			'rule' => ['numeric'],
			'message' => '利益は数字で入力して下さい'
			],
		],
		'cost' => [
			[
			'rule' => ['notBlank'],
			'message' => '諸経費を入力して下さい'
			],
			[
			'rule' => ['numeric'],
			'message' => '諸経費は数字で入力して下さい'
			],
		],
	];

}
