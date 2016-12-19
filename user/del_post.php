<?php
	include('../connection.php');
	$pid = $_GET['pid'];
	$sql = "delete from posts WHERE id=$pid";
	$rr = mysqli_query($conn, $sql);
	header("location:index.php?page=view_posts_after_delete");
?>