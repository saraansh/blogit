<?php
	require('../connection.php');
	$pid = $_GET['pid'];

	if(isset($_POST['update'])){
		$title = strip_tags($_POST['title']);
		$content = strip_tags($_POST['content']);
		$title = mysqli_real_escape_string($conn, $title);
		$content = mysqli_real_escape_string($conn, $content);
		//$date = date('l js \of F Y h:i:s A');
		
		$sql = "update posts set title='$title', content='$content' where id=$pid";

		if($title == "" || $content == ""){
			echo "Please complete your post!";
			return;
		}
		
		mysqli_query($conn, $sql);
		header("location:index.php?page=view_posts_after_edit");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog - Post</title>
</head>
<body>
	<?php
		$sql_get = "select * from posts where id=$pid limit 1";
		$res = mysqli_query($conn, $sql_get);

		if(mysqli_num_rows($res) > 0){
			while($row = mysqli_fetch_assoc($res)){
				$title = $row['title'];
				$content = $row['content'];

				echo "<form actions='edit_post.php?pid=$pid' method='post' enctype='multipart/form-data'>";
				echo "<input placeholder='Title' name='title' type='text' value='$title' autofocus size='48'><br><br>";
				echo "<textarea placeholder='Content' name='content' rows='20' cols='50'>$content</textarea><br>";
			}
		}
	?>
		<input name="update" type="submit" value="Update">
	</form>
</body>
</html>