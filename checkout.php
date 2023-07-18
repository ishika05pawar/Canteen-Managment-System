
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
    <form action="urorder.php" method="POST">
    <div style="display: inline-block;">
    <table style="float: left;border-right-style: double;
    border-right-color: #988063;margin: 50px 0px; font-family: 'Archivo', sans-serif;">
        <th></th>
       

        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <?php
    while($row=mysqli_fetch_assoc($result)) 
    {
        $title=$row['title'];
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
        <td><input type="hidden" name="c_id" value="<?php echo $row['id']?>">
                <input type="hidden" name="food" value="<?php echo $row['title']?>">
                <input type="hidden" name="qty" value="<?php echo $row['qty']?>">
                <input type="hidden" name="price" value="<?php echo $row['price']?>">
               <input type="hidden" name="phone" value="<?php echo $row['mobile_no']; ?>">
        </td>
       
        <td><div class="food-menu-img">
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
            <b>Shipping Details</b>
        </div>
        <div class="blank-div" style="width: 300px;height:1px; background-color: black">
        </div>
        <div style="overflow: hidden;text-align: right;margin: 12px">
            <div style="float: left; font-family: 'Archivo', sans-serif;">
                TOTAL
            
            <?php    
        $sql= "SELECT * FROM tbl_user where email='$mail'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result) > 0)
        {
            
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <form action="urorder.php" method="POST">
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
            
            
            
        </table>
    </form>

            <?php 
                }
            }
             ?>
            
            </div>
            <br><br><br><br>

               
                    <b>Pay with Cash on Delivery</b>
                
            
            
                
        </div>
        <div>
            
            <!-- <div><a href="urorder.php" class="btn btn-primary">Order Placed</a></div> -->

                
    
  
            <input type="submit" name="submit" value="Order Placed" class="btn btn-primary">
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
    
<!--        <img src="image/source.gif" width="250px">
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
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</td></table>
</div>
</form>
<?php
echo "<br><br><br>";
include 'partial-front/footer.php';
?> 