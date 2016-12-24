<div>
<h2>内訳一覧</h2>
<table>
	<tbody>
		<tr>
				<th>
					日付	
				</th>
				<th>
					品目名	
				</th>
				<th>
					金額
				</th>
		</tr>
		<?php foreach ($costs as $cost) : ?>

			<tr>
				<td style="width:20%;">
					<?= $this->Time->format($cost['Profit']['date'], '%Y/%m/%d'); ?>
				</td>
				<td style="width:20%;">
					<?= $cost['Cost']['item']; ?>
				</td>
				<td style="width:20%;">
					<?= $cost['Cost']['price']; ?>円
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?=  $this->Html->link(
	'戻る',
	['action' => 'index']
); ?>
</div>
