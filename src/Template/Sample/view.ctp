<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sample $sample
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sample'), ['action' => 'edit', $sample->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sample'), ['action' => 'delete', $sample->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sample->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sample'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sample view large-9 medium-8 columns content">
    <h3><?= h($sample->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sample->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= $this->Number->format($sample->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= $this->Number->format($sample->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= $this->Number->format($sample->flag) ?></td>
        </tr>
    </table>
</div>
