<h1>Sample Page</h1>
<p>
  <?php

    //フォームの作成
    echo $this->Form->create();
    //コントロールを配置
    echo $this->Form->control('名前');
    echo $this->Form->control('住所');
    echo $this->Form->control('メール');
    echo $this->Form->control('備考');

    echo $this->Form->button('送信');

    //フォームの終了
    echo $this->Form->end();

  ?>
</p>
</div>
