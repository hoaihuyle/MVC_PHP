<?php
class panelController extends Controller
{
    var $panel = "admin/panel/";
    var $panelService ="Services/panelService.php";

    
    function panel(){ 
      require(ROOT . $this->panelService);
      $panel = new panelService();

      $p['listPanel'] = $panel->listPanel($db, 'SELECT * FROM panel LIMIT 5');

      $this->set($p);
      $this->render($this->panel.'show');
    }
    
    function create(){
      require(ROOT . $this->panelService);
      $panel = new panelService();

      if(!empty($_POST)){
          if(isset($_FILES["image"]) && !empty($_FILES['image']['name'])){
            $allowed =  array('gif','png' ,'jpg');
            $filename = $_FILES['image']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $messageError = "";

            if ($_FILES["image"]["error"] > 0) {
                $messageError .= "Lỗi quá trình mở file.";
            }

            if (!in_array($ext, $allowed)) {
                $messageError .= " File không đúng định dạng.";
            }

            if ($_FILES["image"]["size"] > 6*1024*1024) {
                $messageError .= " Dung lượng file không được lớn hơn 6MB.";
            }

            if($messageError == ""){
                $link_img = $this->helper->uploadImagesThumb($_FILES['image'], 'uploads/panels/', 'uploads/panels/thumb/');
            }else {
                $message = $messageError;
            }
          } else { 
              $link_img = ''; 
          } 
          //add image to POST
          $dt['image']= $link_img; 
          $dt['link']= $_POST['link']; 
          $pan['panels'] = $panel->createPanel($db, 'panel', $dt);
          if($pan['panels'] > 1){
            header("Location: " . WEBROOT . 'panel/panel');
          }
          else {
            $d['error'] = " <div class='message p-3 bg-danger text-white'> Thêm panel không thành công</div>";
            $this->set($d);
          }
          
      }  
      
      $this->render($this->panel.'add');
    }

    function edit($id){
      require(ROOT . $this->panelService);
      $panel = new panelService();
      $pan['panel'] = $panel->editPanel($db,'panel', $id);
      if(!empty($_POST)){
        if(isset($_FILES["image"]) && !empty($_FILES['image']['name'])){
          $allowed =  array('gif','png' ,'jpg');
          $filename = $_FILES['image']['name'];
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          $messageError = "";

          if ($_FILES["image"]["error"] > 0) {
              $messageError .= "Lỗi quá trình mở file.";
          }

          if (!in_array($ext, $allowed)) {
              $messageError .= " File không đúng định dạng.";
          }

          if ($_FILES["image"]["size"] > 6*1024*1024) {
              $messageError .= " Dung lượng file không được lớn hơn 6MB.";
          }

          if($messageError == ""){
              $link_img = $this->helper->uploadImagesThumb($_FILES['image'], 'uploads/panels/', 'uploads/panels/thumb/');
          }else {
              $message = $messageError;
          }
        } else { 
            $link_img = ''; 
        } 
        //add image to POST
        if($link_img != '')
          $dt['image']= $link_img;  
        
        $dt['link']= $_POST['link']; 
        
        $save = $panel->saveEditPan($db, 'panel', $dt, array('id' => $id));
        header("Location: " . WEBROOT . 'panel/panel');

      }
      $this->set($pan);
      $this->render($this->panel.'edit');
    }

    function delete($id){
      require(ROOT . $this->panelService);
      $panel = new panelService();
      $del = $panel->delPanel($db, 'panel', $id);
      header("Location: " . WEBROOT . 'panel/panel');
    }

    function status($id){
      require(ROOT . $this->panelService);
      $panel = new panelService();
      $isCheck = $panel->editPanel($db,'panel', $id);
      
      if($isCheck['status'] === '0')
        $dt['status'] = '1';
      else $dt['status'] = '0';

      $up = $panel->saveEditPan($db, 'panel', $dt, array('id' => $id));
      header("Location: " . WEBROOT . 'panel/panel');

    }
}
?>