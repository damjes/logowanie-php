<?php

$zalogowano = false;
if(isset($_POST['login'])) {
	$polaczenie = new mysqli("localhost", "root", "", "logowanie");
	$wynik = $polaczenie->query("
		SELECT haslo
		FROM uzyszkodnicy
		WHERE login=".$_POST['login'].";
	");
	@$dane = $wynik->fetch_assoc();
	if($dane != null && $_POST['haslo'] == $dane['haslo'])
		$zalogowano = true;
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
if($zalogowano)
	echo 'Zalogowano poprawnie. Zapraszam na <a href="index.php">stronę główną</a>.';
else
	echo 'Wystąpił jakiś błąd';
?>
</body>
</html>