
<?php
include 'admin/connect.php';
$delid=$_GET['c_id'];
if(isset($_GET['c_id']))
{

	$sqldel= "DELETE  FROM tbl_cart WHERE id=$delid";
	echo "$sqldel";
	if (mysqli_query($con,$sqldel)) {
		echo "<script>window.location.href='mycart.php';</script>";
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