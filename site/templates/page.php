<?php snippet('header') ?>

	<?php snippet('menu') ?>

	<section class="page">

		<article>
			<?php if($page->pagetitle() != ''): ?>
				<h1><?php echo html($page->pagetitle()) ?></h1>
			<?php else: ?>
				<h1><?php echo html($page->title()) ?></h1>
			<?php endif ?>

			<div><?php echo kirbytext($page->text()) ?></div>
		</article>

	</section>

<?php snippet('footer') ?>