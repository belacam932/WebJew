<!-- -- nếu đụng port:3307 -->
<?php
class connect
{
    var $db = null;
    function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=shoptrangsuc';
        $user = 'root';
        $pass = '';
        // -- tạo đối tượng kết nối với PDO
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } catch (\Throwable $th) {
            echo "kết nối không thành công";
            echo $th;
        }
    }
    function getList($select)
    {
        $result = $this->db->query($select); // $result = $this->db->query(select * from);
        return $result; // 1 table là 1 array lớn
    }
    // pt trả về 1 row
    function getInstance($select)
    {
        $results = $this->db->query($select); // $result = $this->db->query(select * from ... where);
        $result = $results->fetch(); // result là 1 array của 1 dòng
        return $result;
    }
    // pt thực hiện câu truy vấn insert,update,delete
    function exec($query)
    {
        $result = $this->db->exec($query);
        return $result;
    }
    // pt dùng prepare
    function execP($query)
    {
        $statement = $this->db->prepare($query);
        return $statement;
    }
}