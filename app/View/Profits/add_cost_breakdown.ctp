<h2>諸経費新規登録</h2>

<div>
    <?= $this->Form->create('Cost'); ?>
    <?= $this->Form->input('item', ['label' => '品目名','required' => false,]); ?>
    <?= $this->Form->input('price', ['label' => '金額','required' => false,]); ?>
    <?= $this->Form->hidden('profit_id'); ?>
    <?= $this->Form->end('登録する'); ?>
</div>
