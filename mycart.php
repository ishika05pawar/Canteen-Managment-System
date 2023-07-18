
<?php
include 'admin/connect.php';
include 'partial-front/menu.php';
?>
<div class="bake-main">
<?php

$mail=$_SESSION['mail'];
$sql="SELECT * FROM tbl_cart WHERE email='$mail'";
// echo $sql;
$result=(mysqli_query($con,$sql));

if (mysqli_num_rows($result)>0) 
{
	?>
	<div style="display: inline-block;">
	<table style="float: left;border-right-style: double;
    border-right-color: #988063;margin: 50px 0px; font-family: 'Archivo', sans-serif;">
		<th></th>
		<th>Action</th>

		<th>Image</th>
		<th>Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total</th>
		<?php
	while($row=mysqli_fetch_assoc($result))	
	{
		echo "<tr>";
		?>
		<style type="text/css"> 
			td{
				padding: 10px;
			}
			th
			{
				font-size: 22px;
				font-family: sans-serif;
				padding: 20px 20px 0px;
				text-decoration: underline;
			}
		</style>
		<td><input type="hidden" name="c_id" value="<?php echo $row['id']?>"></td>
		<td> <a href='cartdelete.php?c_id=<?php echo $row["id"]?>'>DELETE</a></td>
		<td><div class="food-menu-img">
                    <?php 
                    $image_name=$row['image'];
          if ($image_name=="") {
            // code...
            echo "<div class='error'>Image not found</div>";
          }
          else{
            ?>

            <img src="../images/food/<?php echo $image_name;?>" alt="foods" width="100px" class="img-responsive img-curve">
            
            <?php
          }


         ?>
          </td>
		

		<?php

		echo "<td>".$row['title']."</td>";
		echo "<td>".$row['price']."</td>";
		//echo "<td><input type='number' name='qty' value='".$row['qty']."'></td>";
		echo "<td>".$row['qty']."</td>";
		echo "<td>".$row['total']."</td>";



		echo "</tr>";
	}
	?>
	</table>
	<div class="show-cart-right" style="float:left;margin: 100px 50px ">
		<div class="total-txt" style="margin-bottom: 15px; font-family: 'Archivo', sans-serif;">
			<b>Cart Total</b>
		</div>
		<div class="blank-div" style="width: 300px;height:1px; background-color: black">
		</div>
		<div style="overflow: hidden;text-align: right;margin: 12px">
			<div style="float: left; font-family: 'Archivo', sans-serif;">
				TOTAL
			</div>
			<?php
			$sqlc="SELECT SUM(total) as total FROM tbl_cart WHERE email='$mail'";
			$result=mysqli_query($con,$sqlc);
			if(mysqli_num_rows($result) > 0)
			{
				while($row=mysqli_fetch_assoc($result))
			{
				echo $row['total'];
			}
			}
			?>
			<div style="display: inline-block; font-family: 'Archivo', sans-serif;">
				/- Rs.
			</div>
		</div>
		<div>
			<div class="cont-shoping" style="font-family: 'Archivo', sans-serif;">
					<a href="index.php"> Continue Food Order</a><br><br>
			</div>
			<div><a href="checkout.php" class="btn btn-primary">Proceed to Checkout</a></div>
			<!-- <div class="chekout" style="font-family: 'Poppins', sans-serif;">
				Chek Out
			</div> -->
			
		</div>
	</div>
</div>
</div>
<?php
}
else
{
	?>
	
<!-- 		<img src="image/source.gif" width="250px">
 -->	
	<div class="main-content">
  <div class="wrapper">
    
      <h2 align="center">My Cart Details</h2>
      <section class="food-menu">
        <div class="container">
 
      
      <table class="tbl-full" align="center">
 

		<div style="font-size: 30px;float: left;margin-top: 17px; font-family: 'Archivo', sans-serif;">
			Oops!!!..Empty Cart..
			<br><br>
			<a href="index.php?id=1"><div style="font-size: 20px;">Go For Food Order</div></a> 
		</div>
		
		<!-- <div style="float: left; font-family: 'Archivo', sans-serif;">
			<img src="image/36968-2-sad-emoji-image-thumb.png" width="50px" style="margin-top: 10px">
		</div> -->
	</div>

	 <div class="for-shopping" style="font-family: 'Archivo', sans-serif;"> 
		
	</div>
</table>
<?php


// mysqli_error();
}

?>
</div>
<?php
echo "<br><br><br>";
include 'partial-front/footer.php';
?> 