<?php

session_start();

unset($_SESSION['zalogowano']);
if(isset($_POST['login'])) {
	$polaczenie = new mysqli("localhost", "root", "", "logowanie");

	if ($polaczenie->connect_error) {
		die("Connection failed: " . $polaczenie->connect_error);
	}

	$zapytanie = 'SELECT haslo
	FROM uzyszkodnicy
	WHERE login="'.$_POST['login'].'";';
	//echo $zapytanie;
	$wynik = $polaczenie->query($zapytanie);

	$dane = $wynik->fetch_assoc();

	if($dane != null && $_POST['haslo'] == $dane['haslo'])
		$_SESSION['zalogowano'] = true;
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
<?php
if(isset($_SESSION['zalogowano']))
	echo 'Zalogowano poprawnie.';
else
	echo 'Wystąpił jakiś błąd.';
?>
 Zapraszam na <a href="index.php">stronę główną</a>.
</body>
</html>