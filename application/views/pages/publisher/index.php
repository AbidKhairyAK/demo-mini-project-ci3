<header class="d-flex justify-content-between align-items-center">
	<h1 class="my-4">Publisher List</h1>

	<a href="<?= site_url('publisher/create') ?>" class="btn btn-primary">
		Create Publisher
	</a>
</header>

<table class="table">
	<thead>
		<tr>
			<th>Publisher Name</th>
			<th width="140">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($items as $item) : ?>
			<tr>
				<td><?= $item->name ?></td>
				<td>
					<a href="<?= site_url("publisher/update/$item->id") ?>" class="btn btn-primary btn-sm">
						Edit
					</a>
					<a href="<?= site_url("publisher/delete_process/$item->id") ?>" class="btn btn-danger btn-sm">
						Delete
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>