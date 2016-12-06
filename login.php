<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
		$err="<font color='red'>Fill all the fields!</font>";	
	}
	else
	{
		//encrypt input password
		$pass=md5($p);	
		$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");
		$r=mysqli_num_rows($sql);

		//check if user already exists?
		if((!$sql || $r)==true)
		{
			$_SESSION['user']=$e;
			header('location:user/index.php?page=feed');
		}
		else
		{
			$err="<font color='red'>Invalid Login Details!</font>";

		}
	}
}
?>

<h2>Login Form</h2>
<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Your Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Your Password</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"/></div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-success"/></div>
	</div>
</form>