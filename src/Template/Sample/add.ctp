<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sample $sample
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sample'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sample form large-9 medium-8 columns content">
    <?= $this->Form->create($sample) ?>
    <fieldset>
        <legend><?= __('Add Sample') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('date');
            echo $this->Form->control('flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
