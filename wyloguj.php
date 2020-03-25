<?php

session_start();

unset($_SESSION['zalogowano']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>Pomyślnie wylogowano, zapraszamy na <a href="index.php">stronę główną</a>.</p>
</body>
</html>