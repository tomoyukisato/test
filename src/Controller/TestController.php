<?php
//TestController.php
namespace App\Controller;

use App\Controller\AppController;

class TestController extends AppController
{
    public function initialize()
    {
      //testレイアウトを指定
      $this->viewBuilder()->layout('test');
    }
    public function index()

    {
      //変数teststrをセット
      $this->set('teststr', 'テスト文章てすてすてす！');
    }
}
