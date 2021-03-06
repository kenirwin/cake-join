<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Convents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Women'), ['controller' => 'Women', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Woman'), ['controller' => 'Women', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="convents form large-9 medium-8 columns content">
    <?= $this->Form->create($convent) ?>
    <fieldset>
        <legend><?= __('Add Convent') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('name_english');
            echo $this->Form->control('name_spanish');
            echo $this->Form->control('name_portuguese');
            echo $this->Form->control('name_other');
            echo $this->Form->control('city');
            echo $this->Form->control('country');
            echo $this->Form->control('date_founding');
            echo $this->Form->control('date_closing');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
            echo $this->Form->control('women._ids', ['options' => $women]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
