

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cpf');
            echo $this->Form->control('data_nascimento');
            echo $this->Form->control('email');
            echo $this->Form->control('telefone');
            echo $this->Form->control('endereco');
            echo $this->Form->control('cidade');
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link(('Voltar'),['controller'=> 'users','action' => 'index']); ?>
</div>
