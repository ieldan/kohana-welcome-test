<?php if ( ! Auth::instance()->logged_in()): ?>
<form action="/authenticate" method="POST" class="authentication">
	<label>Username</label>
	<input name="username" value="<?= htmlspecialchars($username) ?>" />
	<label>Password</label>
	<input name="password" type="password" />
	<button type="submit">Login</button>
<?php if ($failed === TRUE): ?>
	<span class="error">Username or password was incorrect.</span>
<?php endif?>
</form>
<?php else: ?>
<form action="/authenticate/logout" method="POST">
	<button type="submit">Logout</button>
</form>
<?php endif ?>
