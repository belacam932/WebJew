<?php
class loai
{
    function getLoai()
    {
        $db = new connect();
        $select = "select idloai,tenloai,idmenu from loai";
        $result = $db->getList($select);
        return $result;
    }
    function getDeleteloai($id)
    {
        $db = new connect();
        $query = "delete from loai where idloai=$id";
        $db->exec($query);
    }
    function getUpdateloai($idmenu,$idloai)
    {
        $db = new connect();
        $query = "update loai 
        set idmenu=$idmenu where idloai=$idloai";
        $db->exec($query);
    }
}
