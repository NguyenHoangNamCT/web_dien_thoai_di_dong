<?php include("../view/top.php"); ?>
<link rel="stylesheet" href="style.scss">
<h3>Quản lý mặt hàng</h3> 
<br>
<a href="index.php?action=them" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Thêm mặt hàng</a>
<br> <br> 



<div class="table-users">
   <div class="header">Users</div>
   
   <table cellspacing="0">
      <tr>
         <th>Picture</th>
         <th>Tên mặt hàng</th>
		 <th>Giá bán</th>
		 <th>Số lượng</th>
		 <th>Sửa</th>
		 <th>Xóa</th>
		 </tr>
	<?php
	foreach($mathang as $m):
	?>

      <tr>
	  	<td><img src="../../<?php echo $m["hinhanh"]; ?>" width="80" ></td>

		  <td><?php echo $m["tenmathang"]; ?></td>
		  <td><?php echo $m["giaban"]; ?></td>
		  <td><?php echo $m["soluongton"]; ?></td>
		  <td><a class="btn btn-warning" href="index.php?action=sua&id=<?php echo $m["id"]; ?>"><span class="glyphicon glyphicon-edit"> </span></a></td>
		  <td><a class="btn btn-danger" href="index.php?action=xoa&id=<?php echo $m["id"]; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>

      </tr>
	  <?php
	endforeach;
		?>
      
   </table>
</div>
<?php include("../view/bottom.php"); ?>
