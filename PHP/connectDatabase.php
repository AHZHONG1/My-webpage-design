<?php

$db = '../Database/Login.accdb';
if (!file_exists($db)) {
	die('Could not find database file');
} else {
	echo 'Database load successfully';
}


?>