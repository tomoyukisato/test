<?=$this->Form->create('HogeHoge', ['url' => ['action' => 'piyo_piyo'], 'type' => 'get'])?>
<?=$this->Form->input('name', ['label' => '名前']);?>
<?=$this->Form->submit('送信')?>
<?=$this->Form->end()?>
