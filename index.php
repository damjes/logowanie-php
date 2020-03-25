<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Strona główna</title>
</head>
<body>
	<p>Witamy</p>
	<p>Zaloguj się, aby zobaczyć tajną zawartość</p>
<?php
if(isset($_SESSION['zalogowano'])){
?>
	<p>Wielka tajemnica</p>
	<p><a href="wyloguj.php">Wyloguj teraz</a>
<?php
}
?>
	<form action="zaloguj.php" method="post">
	<p><input type="text" name="login" id="login"></p>
	<p><input type="password" name="haslo" id="haslo"></p>
	<p><input type="submit" value="Loguj"></p>
	</form>
</body>
</html>