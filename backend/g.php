<?php
	require_once "db.php";
	
	$uid = $_GET['uid'];
	$db->exec("INSERT INTO checkpoints (uid, timestamp) VALUES ('".$uid."', DATETIME('now'))");
	$db->close();
?>