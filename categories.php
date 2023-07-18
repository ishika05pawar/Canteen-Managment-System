<?php 
    include 'partial-front/menu.php';
 ?>
    <!-- CAtegories Section Starts Here -->
    <form action="category-foods">
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
                <?php
                include 'admin/connect.php';
            $sql="select * from tbl_category where active='Yes'";
            $res=mysqli_query($con,$sql);
            $count=mysqli_num_rows($res);
            if ($count>0) {
                while ($row=mysqli_fetch_assoc($res)) {
                    $id=$row['id'];
                    $title=$row['title'];
                    $image_name=$row['image_name'];
                    // code...
                    ?>
                    <a href="category-foods.php?category_id=<?php echo $id; ?>">

            <div class="box-3 float-container">
                <?php 
                if ($image_name=="") {
                    // code...
                    echo "<div class='error'>Image not Found</div>";
                }
                else
                {
                    ?>
                    <img src="images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
<!--                     <h3 class="float-text text-white">idhjhvd</h3> -->

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
                echo "<div class='erreo'>Category not found</div>";
            }


             ?>

            
            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

</form>
    <!-- social Section Starts Here -->
    <?php 

    include 'partial-front/footer.php';
     ?>