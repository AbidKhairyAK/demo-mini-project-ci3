<?php
	$isEdit = isset($item);
	$actionUrl = $isEdit ? "publisher/update_process/$item->id" : 'publisher/create_process';
?>

<h1 class="my-4">Create Publisher</h1>

<hr>

<form action="<?= site_url($actionUrl) ?>" method="POST">
	<div class="form-group">
		<label for="name">Publisher Name</label>
		<input
			type="text"
			class="form-control"
			id="name"
			name="name"
			value="<?= $isEdit ? $item->name : null ?>"
		>
	</div>

	<button class="btn btn-primary">
		Submit
	</button>
</form>