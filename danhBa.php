<?php
class Danhba
{
    var $id;
    var $Names;
    var $email;
    var $phone;
    function __construct($id, $Names, $email, $phone) {
        $this->id = $id;
        $this->Names = $Names;
        $this->email = $email;
        $this->phone = $phone;
    }
    function display() {
        echo "id " . $this->id . "<br>";
        echo "Names " . $this->Names . "<br>";
        echo "Phone " . $this->email . "<br>";
        echo "Email " . $this->phone . "<br>";
    }
    
    static function connect(){
        $con = new mysqli("localhost","root","","danhba");
        $con->set_charset("utf8");
        if ($con->connect_error)
            die("Kết nối thất bại. Chi tiết". $con->connect_error);
        return $con;
    }

    static function getListFromDB(){
        //Bước 1: Tạo  kết nối
        $con = Danhba::connect();
        //echo "<h1>Kết nối thành công</h1>";
        //Bước 2: Thao tác với cơ sở dữ liệu: CRUD
        $sql = "SELECT * FROM `dbdt`";
        $result = $con->query($sql);
        $lsDanhba = array();
        if ($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $danhba = new Danhba($row["id"], $row["Names"], $row["Email"], $row["Phone"]);
                array_push($lsDanhba, $danhba);
            }
        }
        //Bước 3: Đóng kết nối
        $con->close();
        return $lsDanhba;
    }
    static function addToDB(Danhba $content){
        $conn = Danhba::connect(); 
        $sql = "INSERT INTO dbdt (id, Names , Email, Phone) VALUES ($content->id, '$content->Names', '$content->email', $content->phone)";
        $result = $conn->query($sql);
        if($result == true)
            echo 'Tạo thành công';
        else echo 'Tạo thất bại';
        //B3: Giải phóng kết nối
        $conn->close();
       
    }
    static function editDB(Danhba $content){
        $conn = Danhba::connect(); 
        $sql = "UPDATE dbdt SET Names = '$content->Names' , 'Email = $content->email', Phone = $content->phone  WHERE Email = '$content->id' ";
        $result = $conn->query($sql);
        if($result == true)
            echo 'Sửa thành công';
        else echo 'Sửa thất bại';
        //B3: Giải phóng kết nối
        $conn->close(); 
    }
    static function deleteDB($id){
        $conn = Danhba::connect(); 
        $sql = "DELETE FROM dbdt WHERE id = $id";
        $result = $conn->query($sql);
        if($result == true)
            echo 'Xóa thành công';
        else echo 'Xóa thất bại';
        //B3: Giải phóng kết nối
        $conn->close(); 
    }

}
?>
