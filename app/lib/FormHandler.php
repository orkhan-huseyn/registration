<?php

class FormHandler
{
    static function validate_input($required_fields) 
    {

        foreach ($required_fields as $field) 
        {
            if (!empty($_POST[$field]) && isset($_POST[$field])) 
            {
                return true;
            }
        }
        return false;
    }

    static function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    static function upload($file_to_upload, $path) {

        if (empty($_FILES[$file_to_upload]["name"]))
        {
            return "empty";

        } else {
            $target_dir = $path;
            $target_file = $target_dir.date("Y-m-d-H-i-s-").basename($_FILES[$file_to_upload]['name']);
            $type = pathinfo($target_file, PATHINFO_EXTENSION);
            $message = "";

            if ($_FILES[$file_to_upload]['size'] > 500000) {
                $message = "error:size";
            }

            if ($type != "jpg" && $type != "png" && $type != "jpeg" && $type != "gif") {
                $message = "error:type";
            }

            if (move_uploaded_file($_FILES[$file_to_upload]['tmp_name'], $target_file)) {
                $message = date("Y-m-d-H-i-s-").basename($_FILES[$file_to_upload]['name']);
            } else {
                $message = "error:upload + ".$_FILES[$file_to_upload]['error'];
            }

            return $message;
        }
    }
}