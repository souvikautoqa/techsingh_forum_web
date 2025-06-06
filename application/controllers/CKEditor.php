<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once dirname(__FILE__) . "/CommonController.php";

class CKEditor extends CommonController {

    public function __construct(){
        parent::__construct();
    }

	public function file_upload(){

		$input_name = "upload";
		$upload_path = "./uploads/ckeditor/";
		if ($_FILES[$input_name]['error'] !== UPLOAD_ERR_OK) {
            // Handle file upload error
            $error = 'File upload failed.';
			echo $error;
			exit;
        } else {
         
			$file_ext = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);

			// Generate a timestamped file name
			$new_file_name = time() . rand(1111, 9999) .  '.' . $file_ext;
			
            if(move_uploaded_file($_FILES[$input_name]['tmp_name'], $upload_path . $new_file_name)){
				$function_number = $_GET['CKEditorFuncNum'];
				$url =  base_url() . "uploads/ckeditor/" .  $new_file_name;
				$message = 'File uploaded successfully';
				echo "<script>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
				exit;
			}else{
				echo "File not uploaded";
				exit;
			}
           
        }
	}

}
