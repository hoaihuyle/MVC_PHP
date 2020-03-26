<?php 
$db = new Database();
require(ROOT . 'Models/DAO/orderDAO.php');
class orderService extends Service{
  
  function addOrder($db, $table, $dt){
    $order = new orderDAO();
    $order =  $order->addOrder($db,$table, $dt); 
    return $order;
  }

  /**
   * Get ID MAX of Order
   * To auto increa
   */
  function getIdOrder($db,$table, $column){
    $order = new orderDAO();
    $order =  $order->getIdOrder($db,$table, $column); 
    return $order;
  }

  /**
   * tab1 Join tab2 with col1 = col2 where $col1 
   */
  function listOrderAccount($db,$table1, $col1, $table2, $col2){
    $order = new orderDAO();
    $order =  $order->listOrderAccount($db, $table1, $col1, $table2, $col2);
    return $order;
  }

  /**
   * GET ALL INFORMATON OF PRODUCT ORDERD
   */
  function listOrderProduct($db,$table1, $table2,  $col1, $col2, $id){
    $order = new orderDAO();
    $order =  $order->listOrderProduct($db, $table1, $table2, $col1, $col2, $id);
    return $order;
  }

  /**
   * List all Order
   */
  function listOrders($db){
    $order = new orderDAO();
    $order =  $order->fetchAll($db); 
    // $data[]=[];
    $max=0;
    $i=1;
    $t=0;
    foreach($order as $x[]){
      $max=$max+$x[0]['realPrice']*$x[0]['quality'];
      if($t!=$x[0]['id_orde']){ $i++; $t=$x[0]['id_orde'];}
    }
    $data['max']=$max;
    $data['order']=$i;
    $data['count']=count($order);
    return $data;
  }

}    
?>