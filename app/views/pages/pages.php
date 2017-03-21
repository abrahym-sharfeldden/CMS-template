<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="container">
	<a href="<?php echo BASE_URL . "/index.php"; ?>">Back to home</a>

	<?php if (empty($pages)): ?>
		<p> Nothing here at the moment. </p>
	<?php else: ?>
		<?php foreach($pages as $page): ?>
			<tr>
				<td><?php echo e($page['name']); ?></td>
				<td><?php echo e($page['title']); ?></td>
				<td><?php echo e($page['detail']); ?></td>
			</tr>
		<?php endforeach; ?>
	<?php endif; ?>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>