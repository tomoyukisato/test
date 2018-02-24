<?php

namespace App\Controller;

use App\Controller\AppController;

class MoushikomiController extends AppController {
  var $name = 'Moushikomi';

  var $uses = array('Moushikomi'); //Moushikomiモデルを利用する

  var $layout = "moushikomi";  //layoutでmoushikomi.ctpを利用する
  var $pageTitle  = "申し込み画面のタイトルです";  //layoutファイルの$title_for_layoutにタイトルをセットする

  function index() {

  }


  function confirm(){
	//バリデーションチェック
	$this->Moushikomi->set($this->data);
	$error = $this->validateErrors($this->Moushikomi);

	//バリデーションエラーがあれば、index画面に戻し、エラーを表示する
	if(!empty($error)){
		//バリデーションがエラーになったら、indexのhtmlを読み込む
		//エラーメッセージを、indexのviewのerrorsにセット
		$this->set("errors",$error);
		$this->render($action = "index");
	}
  }


  function complete(){
		if (!empty($this->data)) {
			$this->Moushikomi->create();

			//データをDBに登録
			if ($this->Moushikomi->save($this->data)) {
				//メール送信を書く

			}else{
				$this->flash(__('DBエラー', true), array('action'=>'index'));
				$this->_stop();

			}
		}
  }

}
