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
		</tr>
		<?php foreach ($profits as $profit) : ?>
			<tr>
				<td style="width:10%;">
					<?= $this->Time->format($profit['Profit']['date'], '%Y/%m/%d'); ?>
				</td>
				<td style="width:30%;">
					<?= $profit['Profit']['earnings'] - $profit['Profit']['cost']; ?>円
				</td>
				<td style="width:30%;">
					<?=  $this->Html->link(
						$profit['Profit']['earnings'],
						['action' => 'view',$profit['Profit']['id']]
					); ?>円
				</td>
				<td style="width:30%;">
					<?=  $this->Html->link(
						$profit['Profit']['cost'],
						['action' => 'add_cost']
					); ?>円
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
