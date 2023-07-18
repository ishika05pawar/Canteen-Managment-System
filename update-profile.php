<?php 
include 'admin/connect.php';
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$name=$_POST['full-name'];
	$phone=$_POST['phone'];
	$pass=$_POST['pass'];
	$sqlupdate = "UPDATE tbl_user SET full_name='$name', mobile_no='$phone' , password='$pass' WHERE id='$id'";
	// echo "$sqlupdate";

	if(mysqli_query($con,$sqlupdate))
	{
		echo "<script>alert(' Updated successfully !!!');window.location.href='index.php'</script>";
	}
	else
	{
		echo "<script>alert('something wents wrong !!!')</script>";
		// header('Location:profile.php');
	}

}

 ?>