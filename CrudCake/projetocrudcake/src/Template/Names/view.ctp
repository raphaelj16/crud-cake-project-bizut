<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Name $name
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Name'), ['action' => 'edit', $name->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Name'), ['action' => 'delete', $name->id], ['confirm' => __('Are you sure you want to delete # {0}?', $name->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Names'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Name'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category Names'), ['controller' => 'CategoryNames', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Name'), ['controller' => 'CategoryNames', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="names view large-9 medium-8 columns content">
    <h3><?= h($name->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($name->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Name') ?></th>
            <td><?= $name->has('category_name') ? $this->Html->link($name->category_name->id, ['controller' => 'CategoryNames', 'action' => 'view', $name->category_name->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($name->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($name->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($name->modified) ?></td>
        </tr>
    </table>
</div>
