
<nav>
	<div class="mob">
	<img id="mob-menu" src="assets/icons/menu.svg" alt="navigation-icon">
	</div>
	<div class="menu-container menu-display wrapper">
		<div class="nav-left">
            <?php foreach ($data['left'] as $key => $link) : ?>
				<a class="<?php print $data['left'][$key]['class'] ?? '' ?>"
				   href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
            <?php endforeach; ?>
		</div>
		<div class="nav-right">
            <?php foreach ($data['right'] as $key => $link) : ?>
				<a class="<?php print $data['right'][$key]['class'] ?? '' ?>"
				   href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
            <?php endforeach; ?>
		</div>
	</div>
</nav>
