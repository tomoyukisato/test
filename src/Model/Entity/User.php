<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _setPassword($password)
    {
      //https://coodip.com/articles/3471
        return (new DefaultPasswordHasher)->hash($password);
    }
}
