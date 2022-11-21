<?php
if (isset($_POST)) {
    $url = "location: addChild.php?";
    require_once "config.php";
    session_start();
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $ch_Name = false;
    $ch_Date = false;
    $ch_Gender = false;





    $parent_id = "1";
    $Val_Name = '';
    $Val_Date = '';
    $Val_Gender = '';
    $Val_phone = '';
    $Val_tel = '';
    $Val_address = '';


    //========================== 

    if (isset($_POST['children_name'])) {
        $Val_Name = test_input($_POST['children_name']);
        $ch_Name = true;
    } else {
        $ch_Name = false;
    }

    if (isset($_POST['Date'])) {
        $d = test_input(strtotime($_POST['Date']));
        $Val_Date = date("Y-m-d", $d);
        $ch_Date = true;
    } else {
        $ch_Date = false;
    }

    if (isset($_POST['Gender'])) {
        $Val_Gender = test_input($_POST['Gender']);
        $ch_Gender = true;
    } else {
        $ch_Gender = false;
    }

    if (isset($_POST['phone'])) {
        $Val_phone = test_input($_POST['phone']);
    }
    if (isset($_POST['tel'])) {
        $Val_tel = test_input($_POST['tel']);
    }
    if (isset($_POST['address'])) {
        $Val_address = test_input($_POST['address']);
    }



    if ($ch_Name == true &&  $ch_Date == true  && $ch_Gender == true) {

        $insert = "INSERT INTO `patient`( `patient_name`, `birth_date`, `mobile`, `tel`, `address`, `gender`, `parent_id`) VALUES ('{$Val_Name}','{$Val_Date}','{$Val_phone}','{$Val_tel}','{$Val_address}',{$Val_Gender},1)";

        $result_user = mysqli_query($conn, $insert);
        $last_id = $conn->insert_id;
        if ($result_user == false) {
            echo mysqli_error($conn);
        } else {
            $url .= "&suc";
        }

        header($url);
    } else {
        $url .= '&name=1';


        header($url);
    }
} else {
    header('location: addChild.php?');
}
