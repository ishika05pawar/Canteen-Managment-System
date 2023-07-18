<?php 
    include 'partial-front/menu.php';
 ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <?php  
include 'admin/connect.php';
$sql2="select * from tbl_food where active='Yes'";
$res2=mysqli_query($con,$sql2);
$count2=mysqli_num_rows($res2);
if ($count2>0) {
    while ($row=mysqli_fetch_assoc($res2)) {
       // print_r($row);
        $id=$row['id'];
        $title=$row['title'];
      //  $image_name=$row['image_name'];
        $price=$row['price'];
         $description=$row['description'];
             $image_name=$row['image_name'];
                    ?>
                    <div class="food-menu-box">
                <div class="food-menu-img">
                    <?php 

                    if ($image_name=="") 
                    {
                        echo "image not Availabel";
                        
                    }
                    else
                    {
                        
                            ?>
                            <img src="images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                            <?php
                    }

                     ?>
                    
                </div>

                <div class="food-menu-desc">
                    <h4><?php echo $title; ?></h4>
                    <p class="food-price"><?php echo $price; ?></p>
                    <p class="food-detail">
                        <?php echo $description; ?>
                    </p>
                    <br>

                    <a href="order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>
             <?php

                }
            }
            else
            {
                echo "food not Availabel";
            }
            ?>
            <div class="clearfix"></div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <?php 
    include 'partial-front/footer.php';
 ?>
<!-- footer Section Ends Here -->

</body>
</html>