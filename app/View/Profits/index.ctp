<h2>利益一覧</h2>

<table>
	<tbody>
		<?php foreach ($profits as $profit) : ?>
			<tr>
				<td style="width: 30%">
					<?= $this->Html->link(
						$profit['Profit']['profit'],
						['action' => 'view',$profit['Profit']['id']]
					); ?>円
				</td>
				<td style="width: 70%">
					登録日: <?= $this->Time->format($profit['Profit']['created'], '%Y/%m/%D'); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
