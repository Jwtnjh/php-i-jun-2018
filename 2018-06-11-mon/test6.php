<?php
// null coalescing op example
$name = $_GET['name'] ?? $_POST['name'] ?? $_COOKIE['name'] ?? 'Default';
$name = strip_tags($name);
echo $name;
?>
<!DOCTYPE>
<head>
	<title>Null Coalesing Op Example</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<h1>Null Coalesing Op Example</h1>
	<form method="post"><input name="name" type="text" /><input type="submit" /></form>
</body>

</html>
