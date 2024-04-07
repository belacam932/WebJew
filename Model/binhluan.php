<?php
class binhluan
{
    function insertBinhLuan($idkh, $idsanpham, $content)
    {
        $db = new connect();
        $query = "insert into comment(idcomment,makh,idsp,content) 
        values(NULL,$idkh,$idsanpham,'$content')";
        echo $query;
        $db->exec($query);
    }
    function selectComment($idmasp)
    {
        $db=new connect();
        $select="select b.username,a.content from comment a,khachhang b where a.makh=b.makh and a.idsp=$idmasp";
        $result=$db->getList($select);
        return $result;
    }
}
