<?php
/*Checking if an image is uploaded*/
if ($_FILES){
    echo uploadImage($_FILES);
}
function uploadImage($file){
    $upload_errors = array(
         // http://www.php.net/manual/en/features.file-upload.errors.php
         UPLOAD_ERR_OK                 => "No errors.",
         UPLOAD_ERR_INI_SIZE   => "Larger than upload_max_filesize.",
         UPLOAD_ERR_FORM_SIZE  => "Larger than form MAX_FILE_SIZE.",
         UPLOAD_ERR_PARTIAL        => "Partial upload.",
         UPLOAD_ERR_NO_FILE        => "No file.",
         UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
         UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
         UPLOAD_ERR_EXTENSION  => "File upload stopped by extension."
         );
     $name = $file['fileToUpload']['name'];
     $size = $file['fileToUpload']['size'];
     switch($file['fileToUpload']['type']){
         case 'image/jpeg': $ext = 'jpg'; 
         break;
         case 'image/gif': $ext = 'gif'; 
         break;
         case 'image/png': $ext = 'png'; 
         break;
         case 'image/tiff': $ext = 'tif'; 
         break;
         default: $ext = ''; 
         break;
     }
     if($ext ==""){
       return "File type not supported";
     }else{
         $temp = explode(".", $file["fileToUpload"]["name"]);
         $rndstr = round(microtime(true))."data";
         $newfilename = hash('ripemd128',$rndstr) . '.' . end($temp);
        if(move_uploaded_file($file["fileToUpload"]["tmp_name"], "upload/" . $newfilename)){
              return "successfully uploaded";
        }else{
            $error = $file['img']['error'];
            $message = $upload_errors[$error];
            return $message;
        }
     }
  }//End of File Upload Code
?>