
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NT Mobile - Cửa hàng ủy quyền Apple</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  h3{
    text-shadow: 2px 2px 2px silver;
  }
  .carousel-inner img {  
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  footer {
      background-color: #000000;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .carousel {
      width: 1200px;
      margin: auto;
      position: relative;
  }
  .panel-primary>.panel-heading {
      color: #fff;
      background: rgb(123,34,195);
      background: linear-gradient(180deg, rgba(123,34,195,1) 0%, rgba(0,0,0,1) 100%);
  }
  .panel-danger>.panel-heading {
      color: #a94442;
      background: rgb(123,34,195);
      background: linear-gradient(180deg, rgba(123,34,195,1) 0%, rgba(0,0,0,1) 100%);
  }
  .pagination {
      margin: auto;
      display: flex;
      padding-left: 0;
      border-radius: 4px;
      justify-content: center;
  }
  .row-price{
      display: flex;
      width: 76%;
      margin: auto;
  }
  .btn-info {
      color: #fff;
      background-color: #583bb1;
      border-color: #46b8da;
  }
  .btn-info:hover{
      color:#583bb1;
      background-color: #fff ;
      border-color: #583bb1;
  }
  .btn-warning {
      color: #fff;
      background-color: #000000;
      border-color: #ede6db;
  }
  .btn-warning:hover {
      color:#000000 ;
      background-color: #fff;
      border-color:#000000;
  }
 .product__price--through {
      display: inline-block;
      font-size: 14px;
      font-weight: 600;
      text-decoration: line-through;
      color: #707070;
      position: relative;
      top: 2px;
  }
  body {
      font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
      font-size: 14px;
      line-height: 1.42857143;
      color: #fff7f7;
      background-color: #000;
  }
  </style>
</head>
<body id="abc" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> NT Mobile</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown">
            Danh mục sản phẩm<span class="caret"></span>
          </a>
          
          <ul class="dropdown-menu">
            <?php            
            foreach($danhmuc as $dm):
            ?>
            <li><a href="?action=xemnhom&madm=<?php echo $dm["id"]; ?>"><?php echo $dm["tendanhmuc"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
    
        <li><a href="#">Liên hệ</a></li>

        <li><a href="#" data-toggle="modal" data-target="#modalTimKiem">
          <span class="glyphicon glyphicon-search"></span> Tìm kiếm</a></li>  
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
		<?php 
		if(!isset($_SESSION["khachhang"])){
		?>
			<li><a href="?action=dangnhap"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
		<?php  
		}
		else{
		?>
			<li><a href="?action=xemthongtin">Chào <?php echo $_SESSION["khachhang"]["hoten"]; ?></a></li>
			
			<li><a href="?action=dangxuat">Thoát</a></li>
		<?php		
		}
		?>
		
        <li><a href="?action=xemgiohang" class="text-warning">
          <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
          <span class="badge">
            <?php      
              echo demhangtronggio();
            ?>
          </span> </a>
        </li>             
      </ul>
    </div>
  </div>
</nav>

  <!-- Hộp tìm kiếm -->
  <div class="modal fade" id="modalTimKiem" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-search"></span> Bạn cần tìm gì?</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="index.php">
            <div class="form-group">
              <label for="txttukhoa"><span class="glyphicon glyphicon-question"></span> Từ khóa: </label>
              <input type="text" class="form-control" id="txttukhoa" name="txttukhoa" placeholder="Nhập từ khóa">
                <input type="hidden" name="action" value="search" >
            </div>
            <div class="form-group">
              <label for="optbang"> Trong: </label>
              <select name="optbang" class="form-control" id="optbang">
                <option value="mathang">Sản phẩm</option>
                <option value="baiviet">Tin tức</option>
              </select>
            </div>
              <button type="submit" class="btn btn-info">Tìm kiếm  
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        
      </div>
    </div>
  </div>

<br>
