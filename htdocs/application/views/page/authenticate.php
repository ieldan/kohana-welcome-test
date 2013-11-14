<!DOCTYPE html>
<html>
<head>
	<title>Please Authenticate</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
</head>
<body>
	<h1>Please Authenticate</h1>
<?= View::factory('form/login')
	->bind('username', $username)
	->bind('failed', $failed) ?>
</body>
</html>
