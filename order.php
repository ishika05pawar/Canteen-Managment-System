<?php 
    include 'partial-front/menu.php';
 ?>
 <?php 
 include 'admin/connect.php';

 if (isset($_GET['food_id']))
 {
    $food_id=$_GET['food_id'];
    $sql="select * from tbl_food where id=$food_id";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if ($count==1) {
        $row=mysqli_fetch_assoc($res);
        $title=$row['title'];
        $price=$row['price'];
        $image_name=$row['image_name'];
    }
    else
    {
        header('location:index.php');
    }
   
   }
 else
 {
    header('location:index.php');
 }
  ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <?php 
                        if ($image_name=="") {
                            echo "<div class='error'>Image not Availabel</div>";
                        }
                        else{
                            ?>
                            <img src="images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">

                            <?php
                        }
                         ?>
                        
                        
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $title; ?></h3>

                        <input type="hidden" name="food" value="<?php echo $title; ?>">
                        <p class="food-price"><?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    
                         <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Enter Full Name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="Enter Contact No." class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Enter Email Address" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="Enter Your Address" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>
            <?php 
            include 'admin/connect.php';

           if (isset($_POST['submit'])) {
              //  $id=$_POST['id'];
                $food=$_POST['food'];
                $price=$_POST['price'];
                $qty=$_POST['qty'];
                $total=$price * $qty;
                $order_date=date("y-m-d h:i:sa");
                $status="Ordered";
                $customer_name=$_POST['full-name'];
                $customer_contact=$_POST['contact'];
                $customer_email=$_POST['email'];
                $customer_address=$_POST['address'];
               /*                // echo $sql2;
                //die();*/
               $sql2= "INSERT into tbl_order VALUES ('$id', '$food', '$price', '$qty', '$total', '$order_date', '$status', '$customer_name', '$customer_contact', '$customer_email', '$customer_address')";

                $res2=mysqli_query($con,$sql2);
                if ($res2==True) {
                    $_SESSION['order']="<div class='success'>Food Order successfuly</div>";
                    header('location:bill.php');
                }
                else
                {
                 $_SESSION['order']="<div class='error'>Failed insert</div>";
                    header('location:index.php');   

                }

            }

             ?>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
<?php 
    include 'partial-front/footer.php';
 ?>
    <!-- footer Section Ends Here -->

</body>
</html>