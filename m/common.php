<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

session_start();

function get_database_connection() {
    $mysqli = new mysqli('fuber.co', 'fuber', 'PASSWORD', 'fuber');

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $mysqli;
}

function get_current_user_id(){
    return $_SESSION['userId'];
}

function get_current_user_role(){
    return isset($_SESSION['role']) ? $_SESSION['role']: 'seller';
}

function is_loggedIn(){
    global $_SESSION;
    return isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']===true;
}


function save_uploaded_file($file){
    if(!isset($_FILES[$file])) return "";

    //print_r($_FILES);
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $extension = end(explode(".", $_FILES[$file]["name"]));
    if ((($_FILES[$file]["type"] == "image/gif")
        || ($_FILES[$file]["type"] == "image/jpeg")
        || ($_FILES[$file]["type"] == "image/jpg")
        || ($_FILES[$file]["type"] == "image/png"))
        && ($_FILES[$file]["size"] < 20000)
        && in_array($extension, $allowedExts))
    {
        if ($_FILES[$file]["error"] > 0)
        {
            echo "Return Code: " . $_FILES[$file]["error"] . "<br>";
        }
        else
        {
//            echo "Upload: " . $_FILES[$file]["name"] . "<br>";
//            echo "Type: " . $_FILES[$file]["type"] . "<br>";
//            echo "Size: " . ($_FILES[$file]["size"] / 1024) . " kB<br>";
//            echo "Temp file: " . $_FILES[$file]["tmp_name"] . "<br>";
            // Create image instance


            $info = getimagesize($_FILES[$file]["tmp_name"]);
            $extension = image_type_to_extension($info[2]);

            $name = uniqid()."$extension";
            if (file_exists("upload/" . $name))
            {
                echo $_FILES[$file]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES[$file]["tmp_name"],
                    "upload/" . $name);
                echo "Stored in: " . "upload/" . $name;
                return "upload/" . $name;
            }
        }
    }
    else
    {
        echo "Invalid file";
    }
}
