<?php

class DONHANG
{

    // Thêm đơn hàng mới, trả về khóa của dòng mới thêm
    public function themdonhang($nguoidung_id, $diachi_id, $tongtien)
    {
        $db = DATABASE::connect();
        try {
            $sql = "INSERT INTO donhang(nguoidung_id, diachi, tongtien) 
					VALUES(:nguoidung_id,:diachi,:tongtien)";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(':nguoidung_id', $nguoidung_id);
            $cmd->bindValue(':diachi', $diachi_id);
            $cmd->bindValue(':tongtien', $tongtien);
            $cmd->execute();
            $id = $db->lastInsertId();
            return $id;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Đọc ds đơn hàng của 1 khách

    public function getOrder($nguoidung_id)
    {
        $db = DATABASE::connect();
        try {
            $sql = "SELECT * FROM donhang WHERE nguoidung_id = :nguoidung_id ";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(':nguoidung_id', $nguoidung_id);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
}

?>
