<nav>
	<div class="wrapper">
		<div class="nav-left">
            <?php foreach ($data['left'] as $key => $link) : ?>
					<a class="<?php print $data['left'][$key]['class']?? '' ?>" href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
            <?php endforeach; ?>
		</div>
		<div class="nav-right">
            <?php foreach ($data['right'] as $key => $link) : ?>
				<a class="<?php print $data['right'][$key]['class']?? '' ?>" href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
            <?php endforeach; ?>
		</div>
	</div>
</nav>
