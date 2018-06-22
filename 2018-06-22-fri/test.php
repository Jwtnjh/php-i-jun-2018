<!-- ## Charles -->
<?php
$color = 'green'; $color2 = 'blue'; $name = 'LogIn';
?>

<h1>This Form Posts to example.php</h1>
<form action = "example.php" method = "POST">
Username:<input style="color: <?= $color ?>"  type="text" name="username"  />
Password:<input style="color: <?= $color2 ?>" type="password" name="password" />
<input type="submit" value="<?= $name;?>" />
</form>

<h1>This Form Posts to This URL</h1>
<form method = "GET">
Username:<input style="color: <?= $color ?>"  type="text" name="username"  />
Password:<input style="color: <?= $color2 ?>" type="password" name="password" />
<input type="submit" value="<?= $name;?>" />
</form>

<?php if ($_GET) phpinfo(INFO_VARIABLES); ?>
