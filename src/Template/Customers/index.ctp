
<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li><?= $this->Html->link(__('Novo(a) Customer'), ['action' => 'add']) ?></li>
        <li class="active disabled"><?= $this->Html->link(__('Listar Customers'), ['action' => 'index']) ?></li>
    </ul>
	<?php
	/*
	    echo $this->Form->create(null, ['type' => 'get']);
   	    echo $this->Form->label('Busca');
	    echo $this->Form->input('search', ['class' => 'form-control', 'label' => false, 'style'=>'width:170px;',
		'placeholder' => 'Nome ou fone', 'value' => $this->request->getQuery('search')]);	    
	    echo $this->Form->button('Busca');
	    echo $this->Form->end();
	*/
	?>            
</div>
<div class="customers index col-lg-10 col-md-9 columns">
    <div class="table-responsive">
        <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('birthday') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $this->Number->format($customer->id) ?></td>
                <td><?= h($customer->name) ?></td>
                <td><?= h($customer->birthday) ?></td>
                <td><?= h($customer->phone) ?></td>
                <td><?= h($customer->created) ?></td>
                <td><?= h($customer->modified) ?></td>
                    <td class="actions">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-zoom-in"></span><span class="sr-only">' . __('Ver') . '</span>', ['action' => 'view', $customer->id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('Ver')]) ?>
                    <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span><span class="sr-only">' . __('Editar') . '</span>', ['action' => 'edit', $customer->id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('Editar')]) ?>
                    <?php
                    if (isset($loguser)){
			if($loguser != 'user'){
				print $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span><span class="sr-only">' . __('Excluir') . '</span>', ['action' => 'delete', $customer->id], ['confirm' => __('Deseja excluir realmente # {0}?', $customer->id), 'escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Excluir')]);
			}
                    }else{
			print $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span><span class="sr-only">' . __('Excluir') . '</span>', ['action' => 'delete', $customer->id], ['confirm' => __('Deseja excluir realmente # {0}?', $customer->id), 'escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Delete')]);                    
                    }
                    ?>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
