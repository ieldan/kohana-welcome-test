<!DOCTYPE html>
<html>
<head>
	<title>Please Authenticate</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
</head>
<body>
	<h1>Welcome, <?= htmlspecialchars($name) ?>!</h1>
	<p>You are allowed to view a restricted page!</p>
	<?= View::factory('authenticationform') ?>
</body>
</html>
