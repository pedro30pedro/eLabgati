
<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li><?= $this->Html->link(__('Novo(a) User'), ['action' => 'add']) ?></li>
        <li class="active disabled"><?= $this->Html->link(__('Listar Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo(a) Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
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
<div class="users index col-lg-10 col-md-9 columns">
    <div class="table-responsive">
        <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('group_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td>
                    <?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?>
                </td>
            <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                    <td class="actions">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-zoom-in"></span><span class="sr-only">' . __('Ver') . '</span>', ['action' => 'view', $user->id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('Ver')]) ?>
                    <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span><span class="sr-only">' . __('Editar') . '</span>', ['action' => 'edit', $user->id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('Editar')]) ?>
                    <?php
                    if (isset($loguser)){
			if($loguser != 'user'){
				print $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span><span class="sr-only">' . __('Excluir') . '</span>', ['action' => 'delete', $user->id], ['confirm' => __('Deseja excluir realmente # {0}?', $user->id), 'escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Excluir')]);
			}
                    }else{
			print $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span><span class="sr-only">' . __('Excluir') . '</span>', ['action' => 'delete', $user->id], ['confirm' => __('Deseja excluir realmente # {0}?', $user->id), 'escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Delete')]);                    
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
