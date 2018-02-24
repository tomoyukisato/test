<?php
class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message' => '空はダメ'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}

?>
