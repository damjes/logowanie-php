<form action="" method="post">
<input type="text" name="haslo" id="">
<input type="submit" value="OK">
</form>
<?php echo $_POST['haslo']; ?>
<br>
<?php echo password_hash($_POST['haslo'], PASSWORD_DEFAULT); ?>
