<?php include("view/top.php"); ?>

<br><br>
<div class="container">  
<div class="row"> 
    <h3>Trang thông tin khách hàng</h3>  
</div>

    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th>Mã đơn hàng </th>
                <th>Ngày đặt hàng</th>
                <th>Tổng tiền</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($order as $key){
                ?>
            <tr>
                <td><?php echo $key["id"]; ?></td>
                <td><?php  echo $key["ngay"]; ?></td>
                <td><?php  echo $key["tongtien"]; ?>></td>
            </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>
  
  

</div>
<style>
    /* footer {
        background-color: #000000;
        color: #f5f5f5;
        padding: 32px;
        position: absolute;
        width: 1600px;
        margin: auto;
        bottom: 0;
    } */
</style>
<?php include("view/bottom.php"); ?>