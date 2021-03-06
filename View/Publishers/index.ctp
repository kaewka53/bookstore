<div class="index">
	<table>
		<tr>
			<th>Name</th>
			<th>Actions</th>
		</tr>
		<?php foreach ($publishers as $publisher): ?>
		<tr>
			<td><?= $publisher['Publisher']['name']; ?></td>
			<td><?= $this->Html->link('Edit', array('action' => 'edit', $publisher['Publisher']['id'])); ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= $this->Paginator->numbers(); ?>
	<div style="text-align:right;">
		Rendered in: <?= printf('%.3f', $spent); ?>s
	</div>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?= $this->Html->link('New Publisher', array('action' => 'add')); ?></li>
	</ul>
</div>
