<?php
/**
 * THIS FILE CONTAINS SOME UTILS FUNCTIONS
**/

// upload and return the uploaded file link
function file_upload($dir, $file)
{
    

    // Check if the file is well loaded
    if ($_FILES[$file]['name']) {

        // Check if the file do not contains errors
        if (!$_FILES[$file]['error']) {
         

            $temp_name = $_FILES[$file]['tmp_name']; // get the temp file name
            $type = $_FILES[$file]['type']; // get the file type

             // Check the file extensions 
            if (!strstr($type, 'png') || !strstr($type, 'jpg') || !strstr($type, 'JPEG')) {
               
                echo "<script>alert(\"Error ! Wrong file format ! Try Again\")</script>";
                exit();
                
            } else {
                $name = $_FILES[$file]['name']; // get the real file name
                $urlf = $dir . $name; 
                move_uploaded_file($temp_name, $dir . $name); // upload the file
            }
        }
    }
    return $urlf;
}


// author : @ptahemdjehuty
?>