<h2>利益一覧</h2>

<table>
	<tbody>
	<?php foreach ($profits as $proofit) : ?>
		<tr>
			<td>
				<?= $this->Html->link(
					$profit['Profit']['earnings'],
					['action' => 'view',$profit['Profit']['id']]
				); ?>
			</td>
		<tr>
	<?php endforeach; ?>
	</tbody>
</table>
