   
<div class="users form">
<?= $this->Flash->render('auth') ?>    
    <div align="center">
        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('Favor entrar com seu login e senha') ?></legend>
            <?= $this->Form->input('username', ['label'=>'Login', 'class'=>'col4', 'autofocus'=>'true']) ?>
            <?= $this->Form->input('password',['label'=>'Senha', 'class'=>'col4', 'pattern'=>'^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$', 'minlenght'=>8, 'title'=>'Favor digitar uma senha com pelo menos 8 dígitos, sendo pelo menos 1 algarismo, um minúsculo, um maiúsculo e um símbolo']) ?>
        </fieldset>
        <?= $this->Form->button(__('Acessar')); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
