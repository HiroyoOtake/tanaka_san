<h2>利益一覧</h2>

<table>
	<tbody>
		<tr>
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
					登録日	
				</th>
				<th>
					更新日		
				</th>
		</tr>
		<?php foreach ($profits as $profit) : ?>
			<tr>
				<td style="width:24%;">
					<?= $this->Html->link(
						$profit['Profit']['profit'],
						['action' => 'view',$profit['Profit']['id']]
					); ?>円
				</td>
				<td style="width:24%;">
					<?= $this->Html->link(
						$profit['Profit']['earnings'],
						['action' => 'view',$profit['Profit']['id']]
					); ?>円
				</td>
				<td style="width:24%;">
					<?= $this->Html->link(
						$profit['Profit']['cost'],
						['action' => 'view',$profit['Profit']['id']]
					); ?>円
				</td>
				<td style="width:20%;">
					<?= $this->Time->format($profit['Profit']['created'], '%Y/%m/%D'); ?>
				</td>
				<td style="width:20%;">
					<?= $this->Time->format($profit['Profit']['updated'], '%Y/%m/%D'); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
