<?php

trait helperFuncs{
 

  function testConnect(){
    return null;
  }

    /*Convert string signed to non-signed*/
  function khongdau($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
    $str = preg_replace("/(đ)/", "d", $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
    $str = preg_replace("/(Đ)/", "D", $str);
    //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
  return $str;
  }  
  function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' ){
    // date_diff($day,$now)->format("%R%a days")
    $datetime1 = date_create($date_1->format('Y-m-d H:i:s'));
    $datetime2 = date_create($date_2->format('Y-m-d H:i:s'));

    $interval = date_diff($datetime1, $datetime2);

  return $interval->format($differenceFormat);

  }

  /**
  * debug
  **/
  function _debug($data) {
      echo '<pre style="background: #000; color: #fff; width: 100%; overflow: auto">';
      echo '<div>Your IP: ' . $_SERVER['REMOTE_ADDR'] . '</div>';
      $debug_backtrace = debug_backtrace();
      $debug = array_shift($debug_backtrace);
      echo '<div>File: ' . $debug['file'] . '</div>';
      echo '<div>Line: ' . $debug['line'] . '</div>';
      if(is_array($data) || is_object($data)) {
          print_r($data);
      }
      else {
          var_dump($data);
      }
      echo '</pre>';
  }
  //CHUYỂN DẤU THÀNH KHÔNG DẤU VÀ THÊM DẤU GẠCH NGANG
  function to_slug($str) {
      $str = trim(mb_strtolower($str));
      $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
      $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
      $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
      $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
      $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
      $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
      $str = preg_replace('/(đ)/', 'd', $str);
      $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
      $str = preg_replace('/([\s]+)/', '-', $str);
      $str = str_replace("-", " ", $str);
  $str = preg_replace('/\s+/', '-', $str);
      return $str;
  }

  // ================================Libarary Lib file ==================================


  /**
  * Upload Image thumnbal
  */
  function uploadImagesThumb($file,$org_path,$thumb_path){
    $imageName = date('Ymjgis').".jpg";

    ///////// Start the thumbnail generation//////////////
    $n_width=300;          // Fix the width of the thumb nail images
    $n_height=200;         // Fix the height of the thumb nail imaage
  
    
    $add=$org_path.$imageName;
    $tsrc=$thumb_path.$imageName;
    // var_dump($add);
    // echo "-----------";
    // var_dump(move_uploaded_file ($file['tmp_name'],$add));
    // die();
    //echo $add;
    if(move_uploaded_file ($file['tmp_name'],$add)){
      // echo "Successfully uploaded the mage";
      // die();
      chmod("$add",0777);
    }else{
      //echo "Failed to upload file Contact Site admin to fix the problem";
    exit;
    }

    if (!($file['type'] =="image/jpeg" OR $file['type']=="image/gif")){
    echo json_encode("Your uploaded file must be of JPG or GIF. Other file types are not allowed<BR>");
    exit;
    }

    /////////////////////////////////////////////// Starting of GIF thumb nail creation///////////
    if($file['type']=="image/gif")
    {
    $im=ImageCreateFromGIF($add);
    $width=ImageSx($im);              // Original picture width is stored
    $height=ImageSy($im);                  // Original picture height is stored
    $newimage=imagecreatetruecolor($n_width,$n_height);
    imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
    if (function_exists("imagegif")) {
    Header("Content-type: image/gif");
    ImageGIF($newimage,$tsrc);
    }
    elseif (function_exists("imagejpeg")) {
    Header("Content-type: image/jpeg");
    ImageJPEG($newimage,$tsrc);
    }
    chmod("$tsrc",0777);
    }////////// end of gif file thumb nail creation//////////
  
    ////////////// starting of JPG thumb nail creation//////////
    if($file['type']=="image/jpeg"){
      $im=ImageCreateFromJPEG($add); 
      $width=ImageSx($im);              // Original picture width is stored
      $height=ImageSy($im);             // Original picture height is stored
      $newimage=imagecreatetruecolor($n_width,$n_height);                 
      imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
      ImageJpeg($newimage,$tsrc);
      chmod("$tsrc",0777);
    }
      return $imageName;
  }
  /**
  * Function send email
  */
  function sendeMail($mailto, $subject, $sender_name, $sender_email, $mailcontent) {
    $extra= "Content-Type: text/html;charset=utf-8\r\n";
    // $extra = "From: $sender_name<$sender_email>\nContent-Type:  text/html ";
    $extra .= 'From: '.$sender_name.'<'.$sender_email.'>'."\r\n".
    'Reply-To: '.$mailto."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if (empty ($mailto)) {
      return false;
    }
    $message = '<html><body>';
    $message .= $mailcontent;
    $message .= '</body></html>';
  return mail($mailto, $subject, $mailcontent, $extra);
  }

  function saveUploadedFile($file, $file_name, $s_path) {
    //$s_upload_dir= getUploadDir() ;	    
    $s_real_path = realpath($s_path);
    //$s_file_name= getUniqueFileName($file_name) ;
    $s_file_name = $file_name;
    if (move_uploaded_file($file, $s_real_path . "/" . $s_file_name))
      return $s_file_name;
    return "";
  } // end func


}

class helper{
  use helperFuncs;
}


?>