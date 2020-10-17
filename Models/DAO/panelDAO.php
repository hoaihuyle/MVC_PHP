<?php
class panelDAO extends Model
{
    function createPanel($db,$table, $dt)
    {
        return $db->insert($table,$dt);
    }
    
    function listPanel($db, $sql)
    {
        return $db->fetchsql($sql);
    }

    function editPanel($db,$table,$id)
    {
        return $db->fetchID($table, $id);
    }

    function saveEditPan($db, $table, $dt, $where)
    {
        return $db->update($table, $dt, $where);
    }

    function delPanel($db, $table, $id)
    {
        return $db->delete($table, $id);
    }
}
?>