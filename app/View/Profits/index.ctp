<h2>利益一覧</h2>
<table>
	<tbody>
		<tr>
				<th>
					日付	
				</th>
				<th>
					利益	
				</th>
				<th>
					売上
				</th>
				<th>
					諸経費
				</th>
				<th>
				</th>
				<th>
				</th>
		</tr>
		<?php foreach ($profits as $profit) : ?>
			<tr>
				<td style="width:10%;">
					<?= $this->Time->format($profit['Profit']['date'], '%Y/%m/%d'); ?>
				</td>
				<td style="width:20%;">
					<?= $profit['Profit']['earnings'] - $profit['Profit']['cost']; ?>円
				</td>
				<td style="width:20%;">
					<?=  $this->Html->link(
						$profit['Profit']['earnings'],
						['action' => 'view',$profit['Profit']['id']]
					); ?>円
				</td>
				<td style="width:20%;">
					<?=  $this->Html->link(
						$profit['Profit']['cost'],
						['action' => 'breakdown_list',$profit['Profit']['id']]
					); ?>円
				</td>
				<td style="width:15%;">
					<?=  $this->Html->link(
						'諸経費の内訳を入力',
						['action' => 'add_cost_breakdown',$profit['Profit']['id']]
					); ?>
				</td>
				<td style="width:10%;">
					<?=  $this->Form->postlink(
						'削除',
						['action' => 'delete', $profit['Profit']['id']],
						['confirm' => '本当に削除してもよろしいですか?']
					); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
