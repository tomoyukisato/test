<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{
  public function index()
  {
    $str = $this->request->data('date');
    $msg = 'typed: ' . $str;
    if ($str == null)
      { $msg = "please type..."; }
    $this->set('message', $msg);
  }
}
