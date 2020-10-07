<div>
	<?php print $data['table'] ?>

    <?php if (isset($data['form'])): ?>
        <?php print $data['form'] ?>
    <?php elseif (isset($data['message'])): ?>
		<div class="feedback-message"><a href="<?php print $data['message']['link'] ?>"><?php print $data['message']['text'] ?></a></div>
    <?php endif; ?>
</div>
