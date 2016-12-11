<h2>利益一覧</h2>
<?= $test ?>
<?= $this->Html->link( 'テストリンク', [ 'controller' => 'users', 'action' => 'abs','123','456' ]
); ?>円
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
						[ 'action' => 'view',$profit['Profit']['id']]
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
					<?= $this->Time->format($profit['Profit']['created'], '%Y/%m/%d'); ?>
<br>
<br>
					<?= $this->Time->format('2016-12-11 17:02:00','%H:%M'); ?>
				</td>
				<td style="width:20%;">
					<?= $this->Time->format($profit['Profit']['updated'], '%Y/%m/%d'); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
