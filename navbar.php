<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">IT-Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active text-white" aria-current="page" href="index.php">รายการสินค้า</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="cart.php">ตะกร้าสินค้า<?php echo  $meQty; ?></a></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="order_list.php">รายการสั่งซื้อ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>