<nav>
	<div class="nav-left">
        <?php foreach ($data['left'] as $link) : ?>
			<div>
				<a href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
			</div>
        <?php endforeach; ?>
	</div>
	<div class="nav-right">
        <?php foreach ($data['right'] as $link) : ?>
			<div>
				<a href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
			</div>
        <?php endforeach; ?>
	</div>
</nav>
