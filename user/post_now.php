<?php
	require('../connection.php');
	$user = $_SESSION['user'];

	if(isset($_POST['post'])){
		$title = strip_tags($_POST['title']);
		$content = strip_tags($_POST['content']);
		$title = mysqli_real_escape_string($conn, $title);
		$content = mysqli_real_escape_string($conn, $content);
		//$date = date('l js \of F Y h:i:s A');
		
		$sql = "insert into posts (user, title, content) values ('$user','$title','$content')";

		if($title == "" || $content == ""){
			echo "Please complete your post!";
			return;
		}
		
		mysqli_query($conn, $sql);
		header("location:index.php?page=view_posts_after_post");
	}
?>
	<form actions="post.php" method="post" enctype="multipart/form-data">
		<input placeholder="Title" name="title" type="text" autofocus size="48"><br><br>
		<textarea placeholder="Content" name="content" rows="20" cols="50"></textarea><br>
		<input name="post" type="submit" value="Post">
	</form>