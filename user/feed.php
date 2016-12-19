<?php 
	$q=mysqli_query($conn,"select * from posts order by id desc");
	$rr=mysqli_num_rows($q);
	if(!$rr)
	{
		echo "<h2 style='color:red'>There are no Posts to Display!</h2>";
	}
	else
	{
		while($row=mysqli_fetch_assoc($q))
		{
			$user = $row['user'];
			$query = mysqli_query($conn,"select * from user where email='$user'");
			$getname = mysqli_fetch_assoc($query);
			$name = $getname['name'];
			$title = $row['title'];
			$content = $row['content'];
			$date = $row['date'];
			echo "<table class='table table-bordered'>";
			echo "<tr class='success'>";
			echo "<th>$title<div align='right'><span class='glyphicon glyphicon-user'></span>&ensp;$name</div></th>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>$content<div align='right'><span class='glyphicon glyphicon-date'></span>&ensp;$date</div></td>";
			echo "</tr>";
			echo "</table>";
		}
	}
?>