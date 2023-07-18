
<?php
include 'admin/connect.php';
$id=$_GET['id'];
if(isset($_GET['id']))
{

	$sqldel= "DELETE  FROM tbl_order WHERE id=$id";
	
	if (mysqli_query($con,$sqldel)) {
		echo "<script>window.location.href='urorder.php';</script>";

	}
	else
	{
		echo "query error".mysqli_error();
	}

}
else
{
	echo "query error".mysqli_error();
}
?>