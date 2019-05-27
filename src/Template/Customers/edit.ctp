<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li class="active disabled"><?= $this->Html->link(__('Editar Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $customer->id],
                ['confirm' => __('Deseja realmente excluir # {0}?', $customer->id), 'class' => 'btn-danger']
            )
        ?></li>
        <li><?= $this->Html->link(__('Novo(a) Customer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Customers'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="customers form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($customer); ?>
    <fieldset>
        <legend><?= __('Edit Customer') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('birthday');
            echo $this->Form->input('phone');
            echo $this->Form->input('observation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar'), ['class' => 'btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
