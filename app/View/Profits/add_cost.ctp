<h2>諸経費新規登録</h2>

<div>
    <?= $this->Form->create('Profit'); ?>
    <?= $this->Form->input('cost', ['label' => false,'required' => false,]); ?>
    <?= $this->Form->end('登録する'); ?>
</div>
