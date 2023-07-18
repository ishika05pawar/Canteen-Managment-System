<?php 
	include 'partial-front/menu.php';
	include 'admin/connect.php';
 ?>
<div class="bake-main">
 	<?php
	 	$x=$_REQUEST['id'];
	 	$pid=$_REQUEST['p_id'];
	 	$mail=$_SESSION['mail'];
	 	$pname=$_REQUEST['p_name'];
	 	$img=$_REQUEST['img'];
	 	$price=$_REQUEST['price'];
	 	if(isset($mail))
	 	{
		 	$sql= "SELECT * FROM tbl_food where id='$pid' ";
		 	
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0)
			{
				while($row=mysqli_fetch_assoc($result))
			{
			?>
			<div style="overflow: hidden;display: inline-block;margin-top: 50px">
			<div class="flexslider" style="width: 400px;margin-right:35px;padding: 10px;float: left;">
			  
			      <img width="300px" src="<?php echo $row ['prod_img']; ?>">
			  
			 
			</div>

			<div class="content-right">
				<div class="skin-gym-content-in-fancy-owl">
					<?php echo $row['prod_name'];?>
				</div>
				<div class="blank-div">
				</div>
				<form action="cart.php" method="get">
					<input type="hidden" name="p_id" value="<?php echo $_GET['p_id'];?>">
					<input type="hidden" name="mail" value="<?php echo $_GET['mail'];?>">
					<input type="hidden" name="price" value="<?php echo $_GET['price'];?>">
					<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
					<input type="hidden" name="p_name" value="<?php echo $_GET['p_name'];?>">
					<input type="hidden" name="img" value="<?php echo $_GET['img'];?>">
				<div class="price-owl">
					INR <?php echo $row['price'];?> /-
				</div>
				<div style="text-align: left;">
						<input style="font-size: 19px" type="button" name="" value="-" onclick="dec()">
						<input style="font-size: 19px;width: 40px" type="number" name="qtybox" min="1" max="5" id="inc-dec-num" value="1">
						<input style="font-size: 19px" type="button" name="" value="+" onclick="inc()">
				</div>
				<div style="margin: 15px 10px">
					<div class="add-2-cart">
						<div class="cart-button">
							<input type='submit' name="" value="ADD TO CART">
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>

		<div class="disc-main">
			<div class="disc-title">
				DESCRIPTION
			</div>
			<p>
				<?php echo $row ['discription'] ?>
			</p>
		</div>
		<div class="rel-main">
			RELATED PRODUCTS
		</div>
<?php
}
}
$sql= "SELECT * FROM tbl_food WHERE category_id='$x' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{?>
	<div class="related-img">
	<div class="owl-carousel" id="img-slide-owl">
		<?php 
	while($row=mysqli_fetch_assoc($result))
	{
?>

		<div class="item">
			<div class="item-img">
				<img src="<?php echo $row['prod_img'] ?>" alt="" width=" 250px">
				<div class="over-img">
					<div class="div-main-over-img">
						<img id="over-img" src="<?php echo $row['prod_img_hover'] ?>" width="250px">
					</div>
					<div class="q-view">
						<div>
							<a  class="q-view-txt" style="text-decoration: none" href="add-to-cart.php?id=<?php echo $x;?>&p_id=<?php echo $row['prod_img_id']?>&mail=<?php echo $mail?>&price=<?php echo $price?>&p_name=<?php echo $row['prod_name']?>&img=<?php echo $row['prod_img']?>"> QUICK VIEW </a>
						</div>
					</div>
				</div>
			</div>
			<div class="disc-prod-main">
				<div class="prod-name" style="font-size: 15px;">
					<?php echo $row['prod_type'];?>
				</div>
				<div class="disc-prod" style="font-size: 18px;width: 235px">
					<?php echo $row['prod_name'];?>
				</div>
				<div class="price" style="font-size: 18px;">
					INR <?php echo $row['price'];?> /-
				</div>
			</div>
			<div class="ad-2-cart">
				<a style="text-decoration: none" href="addcart.php?id=<?php echo $x;?>&p_id=<?php echo $row['prod_img_id']?>&mail=<?php echo $mail?>&price=<?php echo $price?>&p_name=<?php echo $row['prod_name']?>&img=<?php echo $row['prod_img']?>"> 
			<div class="ad-2-cart">
				<div class="cart-button">
					ADD TO CART 
				</div>
			</div>
		</a>
			</div>
		</div>
	</a>
<?php
}?>
</div>
</div>
<?php
}
}
else
{
	echo "<script>alert('Login first !!!');window.location.href='login-test.php';</script>";
}
?>

</div>