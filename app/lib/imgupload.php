<?php
namespace lib;
trait imgupload
{
    public function multipleuploads($inpt,$src){
        global $con;
        $image = $_FILES[$inpt];
        $image_name = $image['name'];
        $image_type = $image['type'];
        $image_temp = $image['tmp_name'];
        $image_size = $image['size'];
        $image_eror = $image['error'];
        $allowed_extension = array('jpg','gif','png','jpeg');
        try{
            $finalName;
                $errors = []; 
                if(!empty($image_name)){
                    $finalName =  rand(0,100000000000).'_'.time().'_'.$image_name;
                }else{
                    $finalName = null;
                }
                $ex_arr = explode('.',$image_name);
                $img_ex = strtolower(end($ex_arr));
                if($image_eror == 4){
                    $errors[] = 'No File Uploaded';
                }else{
                    if($image_size > 10000000){
                        $errors[] = 'Image Too Big';
                    }
                    if(! in_array($img_ex,$allowed_extension)){
                        $errors[] = 'You Can\'t Upload This File';
                    }
                }
                if(empty($errors)){
                    move_uploaded_file($image_temp,"$src$finalName"); 
                }else{
                    $_SESSION['result'] = '<div class="alert alert-success">Something Wrong</div>';
                }
            return !empty($finalName) ? $finalName : null;
        }catch(Exception $e){
            echo 'Caught exception: '.$e->getMessage();
        }
    }
}