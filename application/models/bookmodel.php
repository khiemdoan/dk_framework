<?php

class BookModel extends Framework\Model {
    
    public function addData() {
        $con = connect_database();
        $sql = " INSERT INTO sach (IDtheloai, tacgia, tensach, ";
        $sql .= " noidungtomtat, giaban, namxuatban) ";
        $sql .= " VALUES ({$_POST['theloai']}, {$_POST['tacgia']}, ";
        $sql .= " {$_POST['tensach']}, {$_POST['noidung']}, ";
        $sql .= " {$_POST['giaban']}, {$_POST['namxuatban']})";
        mysqli_query($con, $sql);
    }

}
