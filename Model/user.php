<?php
class user{
    //phuong thuc kiem tra user va email co ton tai chua?
        function checkUser($user,$email)
        {
            $db=new connect();
            $select="SELECT a.username, a.email from khachhang a WHERE a.username='$user' or a.email='$email'";
            $result=$db->getList($select);
            return $result;
        }
    //phuong thuc insert vao database
        function insertKH($tenkh, $user, $matkhau, $email, $diachi, $sodt)
        {
            $db= new connect();
            $query="INSERT INTO khachhang (makh, tenkh, username, matkhau, email, diachi, sodienthoai)
            VALUES (NULL, '$tenkh','$user', '$matkhau', '$email','$diachi', '$sodt')";
            //exec
            echo $query;
            $result=$db->exec($query);
            return $result; 
        }
        function loginKH($user,$pass)
        {
            $db=new connect();
            $select="SELECT * FROM khachhang a WHERE a.username='$user' and a.matkhau='$pass'";
            echo $select;
            $result=$db->getInstance($select);
            return $result;
        }
		function getEmail($email)
    {
        $db = new connect();
        $select = "select * from khachhang where email = '$email'";
        //    echo $select;
        $result = $db->getList($select);
        return $result;
    }
	function getPassNew($emailold,$passnew){
        $db=new connect();
        $query="update khachhang set matkhau='$passnew' where email='$emailold'";
        $db->exec($query);
    }
    
}
?>