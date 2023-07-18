<?php
include 'admin/connect.php';
include 'partial-front/menu.php';
?>
<?php 
    include 'admin/connect.php';
    @session_start();

     ?>


  

 <?php 
            include 'admin/connect.php';

           if (isset($_POST['submit'])) {
                $id=$_POST['id'];
            $mail=$_SESSION['mail'];

                $food=$_POST['food'];
                $price=$_POST['price'];
                $qty=$_POST['qty'];
                $total=$price * $qty;
                $order_date=date("y-m-d h:i:sa");
                $status="Ordered";

                $name=$_POST['full-name'];
                $phone=$_POST['phone'];
                $add=$_POST['address'];
               
               /*                // echo $sql2;
                //die();*/
               $sql2= "INSERT into tbl_order VALUES ('$id', '$food', '$price', '$qty', '$total', '$order_date', '$status', '$name', '$phone', '$mail', '$add')";

                $res2=mysqli_query($con,$sql2);
                if ($res2==True) {
                    $_SESSION['order']="<div class='success'>Food Order successfuly</div>";
                    //header('location:bill.php');
                }
                else
                {
                 $_SESSION['order']="<div class='error'>Failed insert</div>";
                    header('location:index.php');   

                }

            }

             ?>

 <div class="main-content">
    <div class="wrapper">
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
    <br><br>
      <h2>Recent Order</h2>
      <br><br>
       <?php 
      include 'admin/connect.php';
      @session_start();
      
            if (isset($_SESSION['order']))
             {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
            }
            if (isset($_SESSION['uemail']))
             {
            //echo $_SESSION['uemail'];
            unset($_SESSION['uemail']);
            }
      
     
      ?>
      <br><br>
      <!-- <a href="" class="btn-primary">Add Order</a> -->
      <br><br>
      <table class="tbl-full">
    <tr>
      <th>S.N</th>
      <th>Food</th>
      <th>price</th>
      <th>Qty.</th>
      <th>Total</th>
      <th>Order Date</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
    <?php 
    include 'admin/connect.php';
      $mail=$_SESSION['mail'];
      $sql="select * from tbl_order WHERE customer_email='$mail'";
      $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
      $sn=1;
      if ($count>0) 
      {
        while ($row=mysqli_fetch_assoc($res))
         {
          $id=$row['id'];
          $price=$row['price'];
          $food=$row['food'];
          $qty=$row['qty'];
          $total=$row['total'];
          $order_date=$row['order_date'];
          $status=$row['status'];
          
          ?>
          <tr>
      <td><?php echo $sn++; ?></td>
      <td><?php echo $food; ?></td>
      <td><?php echo $price; ?></td>
      <td><?php echo $qty; ?></td>
      <td><?php echo $total; ?></td>
      <td><?php echo $order_date; ?></td>
     
      <td>
        <?php 
          if ($status=="Ordered") {
            echo "<label>$status</label>";
          }
          elseif ($status=="On Delivery") {
            echo "<label style='color:orange;'>$status</label>";
          }
          elseif ($status=="Delivered") {
            echo "<label style='color:green;'>$status</label>";
          }
          elseif ($status=="Cancelled") {
            echo "<label style='color:red;'>$status</label>";
          }
           //echo $status;
         ?>

        
      </td>
      
      
      
<td>
     
        <a href="delete-order.php?id=<?php echo $row['id'];?>" class="btn-danger">Cancel</a>
      </td>
    </tr>

          <?php

          
        }
      }
      else
      {
        echo "<tr><td colspan='12' class='error'>Order not Availabel</td></tr>";
      }
     ?>
    
    </table>
  
  
  
</div>
</div>
 <?php 
include 'partial-front/footer.php';
  ?>