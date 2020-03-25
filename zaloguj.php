<?php

session_start();

unset($_SESSION['userid']);
if(isset($_POST['login'])) {
	$polaczenie = new mysqli("localhost", "root", "", "logowanie");
	$polaczenie->set_charset("utf8");

	if ($polaczenie->connect_error) {
		die("Connection failed: " . $polaczenie->connect_error);
	}

	$zapytanie = 'SELECT id, haslo
	FROM uzyszkodnicy
	WHERE login="'.$polaczenie->escape_string($_POST['login']).'";';
	// echo $zapytanie;
	// echo '<br>';
	$wynik = $polaczenie->query($zapytanie);

	@$dane = $wynik->fetch_assoc();
	// echo $dane['haslo'];
	// echo '<br>';
	// echo $_POST['haslo'];
	// echo '<br>';

	if($dane != null && password_verify($_POST['haslo'], $dane['haslo'])){
		$_SESSION['userid'] = $dane['id'];
		header("Location: index.php", true, 303);
		$polaczenie->close();
		die();
	}
	$polaczenie->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logowanie</title>
</head>
<body>
Wystąpił jakiś błąd. Zapraszam na <a href="index.php">stronę główną</a>.
</body>
</html>