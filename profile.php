<?php
	include 'partial-front/menu.php';
	include 'admin/connect.php';
	$mail= $_SESSION['mail'];
if(isset($_SESSION['mail']))
	{
		$sql= "SELECT * FROM tbl_user where email='$mail'";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			
			while($row=mysqli_fetch_assoc($result))
			{
				?>
 
<style type="text/css">
    
    *{
    margin: 0;
    padding: 0;
    font-family: Arial,Helvetica,sans-serif;
}
.wrapper{
    border: 1px,solid black;
    padding: 1%;
    width: 80%;
    margin: 0 auto;
}
.text-center{
    text-align: center;

}
.clearfix{
    float: none;
    clear: both;
}
.tbl-full{
width: 100%;


}
.tbl-30{
    width: 30%;
}
table tr th{
    border-bottom: 1px solid black;
    padding: 2%;
    text-align: left;

}
table tr td{
    padding:1%;

}

.btn-primary{
    background-color: #1e90ff;
    padding: 1%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-primary:hover{
    background-color: #3742fa;
}
.btn-secondary{
    background-color: #7bed9f;
    padding: 1%;
    color: black;
    text-decoration: none;
    font-weight: bold;
}
.btn-secondary:hover{
    background-color: #2ed573;
}
.btn-danger{
    background-color: #ff6b81;
    padding: 1%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-danger:hover{
    background-color: #ff4757;
}
/*css for menu*/
.menu{
    border-bottom: 1px solid grey;
}
.menu ul{
    list-style-type: none;
}
.menu ul li{
    display: inline;
    padding: 1%;
}
.menu ul li a{
    text-decoration: none;
    font-weight: bold;
    color: #ff6b81;
}
.menu ul li a:hover{
    color: #ff4757;
}
.main-content{
    margin: 1% 0;

    padding: 3% 0;
}
.col-4{
    width: 18%;
    background-color: white;
    margin: 1%;
    padding: 2%;
    float: left;
}
.success{
    color: #2ed573;
}
.error
{
    color: #ff4757;
}
/*css for footer*/


</style>
<div class="main-content">
    <div class="wrapper">
        <br><br>
    <h2>Account Details</h2>
    <br>
    <form action="update-profile.php" method="POST">
        <table class="tbl-30">
            <tr>
                    <input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
                </tr>

            <tr>
                <td>
                    Full Name:
                </td>
                <td>
                    <input type="text" name="full-name" value="<?php echo $row['full_name']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Mobile No:
                </td>
                <td>
                    <input type="text" name="phone" value="<?php echo $row['mobile_no']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Email Id:
                </td>
                <td>
                    <b><?php echo $row['email']; ?></b>
                </td>
            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <input type="Address" name="address" value="<?php echo $row['address']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="text" name="pass" value="<?php echo $row['password']; ?>">
                </td>
            </tr>
            
            <tr>
                
                <td>
                    <input type="submit" name="submit" value="Update" class="btn btn-secondary">
                </td>
            </tr>
        </table>
    </form>

</div>
</div>	
			
			<?php
			}
		}
		else
		{
			echo "<script>alert('Something wents wrong')</script>";
		}
	}
else 
	{
		echo "<script>alert('login first');window.location.href='login.php';</script>";
	}
	?>


	<?php
include 'partial-front/footer.php';
?> 