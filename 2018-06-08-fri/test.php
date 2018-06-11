<?php
/*
if ($contents = file_get_contents('gettysburg.txt')) {
	echo 'Results are in place';
}
*/

$id1 = 12345;
$id2 = $_GET['id'] ?? 0;


if ($id1 == $id2) {
	echo 'The IDs match';
} else {
	echo 'No Match';
}

var_dump($id1,$id2);

// execution example:
$winCmd = 'dir *.*';
$linuxCmd = 'ls -l';
if (PHP_OS == 'linux') {
	$result = shell_exec($linuxCmd);
} else {
	$result = shell_exec($winCmd);
}
echo '<pre>' . $result . '</pre>';
