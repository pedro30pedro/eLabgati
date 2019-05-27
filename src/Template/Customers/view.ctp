
<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Deseja excluir realmente # {0}?', $customer->id), 'class' => 'btn-danger']) ?> </li>
        <li><?= $this->Html->link(__('Listar Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Customer'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customers view col-lg-10 col-md-9 columns">
    <h2><?= h($customer->name) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Name') ?></h6>
                    <p><?= h($customer->name) ?></p>
                    <h6 class="subheader"><?= __('Phone') ?></h6>
                    <p><?= h($customer->phone) ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 columns numbers end">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Id') ?></h6>
                    <p><?= $this->Number->format($customer->id) ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 columns dates end">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Birthday') ?></h6>
                    <p><?= h($customer->birthday) ?></p>
                    <h6 class="subheader"><?= __('Created') ?></h6>
                    <p><?= h($customer->created) ?></p>
                    <h6 class="subheader"><?= __('Modified') ?></h6>
                    <p><?= h($customer->modified) ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row texts">
        <div class="columns col-lg-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Observation') ?></h6>
                    <?= $this->Text->autoParagraph(h($customer->observation)); ?>
                </div>
            </div>
        </div>
    </div>
</div>
