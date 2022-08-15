<?php
session_start();
require 'connect.php';
$meSql = "SELECT * FROM products ";
$meQuery = $con->query($meSql);
 
$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
if(isset($_SESSION['qty'])){
$meQty = 0;
foreach($_SESSION['qty'] as $meItem){
$meQty = $meQty + $meItem;
}
}else{
$meQty=0;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php
        include 'navbar.php';
        if($action == 'exists'){
            echo "<div class=\"alert alert-warning\">เพิ่มจำนวนสินค้าแล้ว</div>";
        }
            if($action == 'add'){
            echo "<div class=\"alert alert-success\">เพิ่มสินค้าลงในตะกร้าเรียบร้อยแล้ว</div>";
        }
            if($action == 'order'){
            echo "<div class=\"alert alert-success\">สั่งซื้อสินค้าเรียบร้อยแล้ว</div>";
        }
            if($action == 'orderfail'){
            echo "<div class=\"alert alert-warning\">สั่งซื้อสินค้าไม่สำเร็จ มีข้อผิดพลาดเกิดขึ้นกรุณาลองใหม่อีกครั้ง</div>";
        }
    ?>
    <div class="container">
            <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>รายละเอียด</th>
                <th>ราคา</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($meResult = mysqli_fetch_assoc($meQuery))
            {
            ?>
                <tr>
                    <td><img src="images/<?php echo $meResult['product_img_name']; ?>" border="0"></td>
                    <td><?php echo $meResult['product_code']; ?></td>
                    <td><?php echo $meResult['product_name']; ?></td>
                    <td><?php echo $meResult['product_desc']; ?></td>
                    <td><?php echo number_format($meResult['product_price'],2); ?></td>
                    <td>
                        <a class="btn btn-primary btn-lg" href="updatecart.php?itemId=<?php echo $meResult['id']; ?>" role="button">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        หยิบใส่ตะกร้า</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>