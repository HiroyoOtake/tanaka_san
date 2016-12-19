<?php

class Cost extends AppModel {
	public $validate = [
		'item' => [
			[
			'rule' => ['notBlank'],
			'message' => '品目名を入力して下さい'
			],
		],
		'price' => [
			[
			'rule' => ['notBlank'],
			'message' => '金額を入力して下さい'
			],
			[
			'rule' => ['numeric'],
			'message' => '金額は数字で入力して下さい'
			],
		],
	];

}
