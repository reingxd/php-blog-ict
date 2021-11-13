<?php if (count($errors) > 0) : ?>
	<div class="flex flex-col gap-2">
		<?php foreach ($errors as $error) : ?>
			<div class="py-3 px-5 mb-4 bg-red-100 text-red-900 text-sm rounded-md border border-red-200" role="alert">
				<?php echo $error ?>
			</div>
		<?php endforeach ?>
	</div>
<?php endif ?>