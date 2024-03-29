    <!-- Navbar Section Ends Here -->
    <?php 

        include 'partial-front/menu.php';
     ?>

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
    <?php 
    include 'admin/connect.php';
    session_start();

            if (isset($_SESSION['order']))
             {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
            }
            if (isset($_SESSION['uemail']))
             {
            echo $_SESSION['uemail'];
            unset($_SESSION['uemail']);
            }
     ?>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
        
        <?php
include 'admin/connect.php';
$sql="select * from tbl_category where active='Yes'  LIMIT 3";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
if ($count>0) {
    while ($row=mysqli_fetch_assoc($res)) {
        //print_r($row);
        $id=$row['id'];
        $title=$row['title'];
        $image_name=$row['image_name'];
        ?>
        <a href="category-foods.php?category_id=<?php echo $id; ?>">
            <div class="box-3 float-container">
                <?php 
                if ($image_name=="") {
                    echo "<div class='error'>image not Availabel</div>";
                }
                else
                {  
                     
                    
                    ?>
                     <img src="images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve" width="300">
                    <?php
                }
                 ?>
                
               <h3 class="float-text text-white"><?php echo $title; ?></h3>
            </div>
                
        </a>
        <?php
    }
}
else
{
    echo "<div class='error'>Category not added</div>";
}
?>
 <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

              <?php
include 'admin/connect.php';
$sql2="select * from tbl_food where active='Yes' LIMIT 6";
$res2=mysqli_query($con,$sql2);
$count2=mysqli_num_rows($res2);
if ($count2>0) {
    while ($row=mysqli_fetch_assoc($res2)) {
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
                        echo "image not Available";
                        
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

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
        <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
   <?php 

   include 'partial-front/footer.php';
    ?>