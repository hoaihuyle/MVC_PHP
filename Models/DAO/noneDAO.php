<?php
class noneDAO extends Model
{
    function addClient($db,$table, $dt)
    {
        return $db->insert($table,$dt);
    }
   
}
?>