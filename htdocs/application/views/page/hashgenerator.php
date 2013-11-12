<!DOCTYPE html>
<html>
<head>
	<title>hash generator (for debugging purposes!)</title>
</head>
<body>
	<form>
		<input name="input" value="<?= htmlspecialchars($input) ?>" />
		<button>Hash it!</button>
	</form>
<?php if ($hash): ?>
	<label>Hash: </label>
	<output><?= htmlspecialchars($hash) ?></output>
<?php endif ?>
</body>
</html>
