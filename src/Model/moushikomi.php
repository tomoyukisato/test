
<?php

class Moushikomi extends AppModel {

	var $name = 'Moushikomi';
	var $useTable='moushikomi'; //moushikomiテーブルを利用する　

	var $validate = array(
		'namekanji' => array(
			"rule1" => array('rule' => array('maxlength','50'),
							'message' => '名前(漢字)は50文字以内です'
			),
			"rule2" => array('rule' => VALID_NOT_EMPTY,
							'message' => '名前(漢字)を入力してください'
			),
		),
		'namekana' => array(
			"rule1" => array('rule' => array('maxlength','50'),
							'message' => '名前(カナ)は50文字以内です'
			),
			"rule2" => array('rule' => VALID_NOT_EMPTY,
							'message' => '名前(カナ)を入力してください'
			),
		),
		'email' => array(
			"rule1" => array('rule' => array('maxlength','128'),
							'message' => 'emailは128文字以内です'
			),
			"rule2" => array('rule' => array("email",true),
							'message' => '正しいメールアドレスを入力してください'
			),
		),
		'tel' => array(
			"rule1" => array('rule' => array('maxlength','50'),
							'message' => '電話番号は50文字以内です'
			),
			"rule2" => array('rule' => array("custom",'/^\d{2,4}(-)*\d{2,4}(-)*\d{4}$/'),
							'message' => '正しい電話番号を入力してください'
			),
		),
		'postcode' => array(
			"rule1" => array('rule' => array('maxlength','10'),
							'message' => '郵便番号は10文字以内です'
			),
			"rule2" => array('rule' => array("custom",'/^\d{3}(-)*\d{4}$/'),
							'message' => '正しい郵便番号を入力してください'
			),
		),
		'address' => array(
			"rule1" => array('rule' => array('maxlength','100'),
							'message' => '住所は100文字以内です'
			),
			"rule2" => array('rule' => VALID_NOT_EMPTY,
							'message' => '住所を入力してください'
			),
		),
		'detail' => array(
			"rule1" => array('rule' => array('maxlength','1000'),
							'message' => '申し込み内容は1000文字以内です'
			),
			"rule2" => array('rule' => VALID_NOT_EMPTY,
							'message' => '申し込み内容を入力してください'
			),
		),

	);


}

?>
