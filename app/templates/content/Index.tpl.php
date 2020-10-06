<div class="account-container">
	<h2>Greetings, <?php print $data['user_name'] ?></h2>
	<h3>Your balance: <?php print $data['money'] ?> euro</h3>
	<img class="account-icon" src="assets/icons/money.png" alt="Money">
    <?php print $data['form']; ?>
    <?php if (isset($data['error'])) : ?>
		<div class="form-box">
			<span class="error"><?php print $data['error']; ?></span>
		</div>
    <?php endif; ?>
</div>
