<?php

session_start();

unset($_SESSION['zalogowano']);

header("Location: index.php", true, 303);

?>