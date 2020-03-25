<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Strona główna</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-rCA2D+D9QXuP2TomtQwd+uP50EHjpafN+wruul0sXZzX/Da7Txn4tB9aLMZV4DZm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body class="container">
	<h1>Witamy</h1>
	<p>Zaloguj się, aby zobaczyć tajną zawartość</p>
<?php
if(isset($_SESSION['userid'])){
?>
	<p>Witaj, <?php
$polaczenie = new mysqli("localhost", "root", "", "logowanie");
$polaczenie->set_charset("utf8");

if ($polaczenie->connect_error) {
	die("Connection failed: " . $polaczenie->connect_error);
}

$zapytanie = 'SELECT pelna_nazwa, email
FROM uzyszkodnicy
WHERE id="'.$_SESSION['userid'].'";';
//echo $zapytanie;
$wynik = $polaczenie->query($zapytanie);

$dane = $wynik->fetch_assoc();

echo $dane['pelna_nazwa'];
echo '</p>';
$email = trim($dane['email']);
$email = strtolower($email);
$grav_id = md5($email);
echo '<p><img src="https://www.gravatar.com/avatar/'.$grav_id.'" /></p>';

$polaczenie->close();
?></p>
	<p>Wielka tajemnica</p>
	<p><a href="wyloguj.php"><i class="fa fa-sign-out"></i> Wyloguj teraz</a>
<?php
} else {
?>
	<form action="zaloguj.php" method="post">
	<p><input type="text" name="login" id="login"></p>
	<p><input type="password" name="haslo" id="haslo"></p>
	<p><input type="submit" value="Loguj"></p>
	</form>
<?php } ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</body>
</html>