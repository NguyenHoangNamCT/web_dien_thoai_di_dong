<?php include("view/top.php"); ?>

<br><br>
<div class="container">  
  <div class="row"> 
    <h3>Cảm ơn quý khách!</h3>   
	<h4>Đơn hàng mã số <?php echo $donhang_id; ?> trị giá <strong><?php echo number_format($tongtien) ?>đ</strong> sẽ được giao đến quý khách trong thời gian sớm nhất.
  </div>
  
  <?php include("topview.php"); ?>
  

</div>

<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>