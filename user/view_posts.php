<?php 
	$q=mysqli_query($conn,"select * from posts where user='".$_SESSION['user']."' order by id desc");
	$rr=mysqli_num_rows($q);
	if(!$rr)
	{
		echo "<h2 style='color:red'>There are no Posts to Display!</h2>";
	}
	else
	{
?>
		<h2>All Posts</h2>

		<table class="table table-bordered">
			<tr class="success">
				<th>Sr.No</th>
				<th>Title</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Date</th>
			</tr>
		<?php
			$id=$rr;
			while($row=mysqli_fetch_assoc($q))
			{
				$pid = $row['id'];
				$title = $row['title'];
				$content = $row['content'];
				$date = $row['date'];
				echo "<Tr>";
				echo "<td>".$id."</td>";
				echo "<td>".$title."</td>";
				echo "<td><div><center><span class='glyphicon glyphicon-edit'></span><a href='edit_post.php?pid=$pid'> Edit</a></center></div></td>";
				echo "<td><div><center><span class='glyphicon glyphicon-remove'></span><a href='del_post.php?pid=$pid'> Delete</a></center></div></td>";
				echo "<td>".$date."</td>";
				echo "</Tr>";
				$id--;
			}
		?>
		</table>
<?php
	}
?>