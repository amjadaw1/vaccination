<?php
if (isset($_POST)) {
    $url = "location: vacreservation.php?";
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
    $ch_Doctor = false;
    $ch_Vacc = false;





    $Val_Name_id = '';
    $Val_Date = '';
    $Val_Doctor = '';
    $Val_Vacc = '';


    //========================== 

    if (isset($_POST['children_id'])) {
        $Val_Name_id = test_input($_POST['children_id']);
        $ch_Name = true;
    } else {
        $ch_Name = false;
    }

    if (isset($_POST['Date'])) {
        $Val_Date = test_input($_POST['Date']);
        $ch_Date = true;
    } else {
        $ch_Date = false;
    }

    if (isset($_POST['Vaccination'])) {
        $Val_Vacc = test_input($_POST['Vaccination']);
        $ch_Vacc = true;
    } else {
        $ch_Vacc = false;
    }

    if (isset($_POST['Doctor'])) {
        $Val_Doctor = test_input($_POST['Doctor']);
        $ch_Doctor = true;
    } else {
        $ch_Doctor = false;
    }


    if ($ch_Name == true &&  $ch_Date == true  && $ch_Vacc == true && $ch_Doctor == true) {

        $insert = "INSERT INTO `vacc_reservation_of_p`( `patient_id`, `v_id`, `date_of_reservation`,`doctor_id`) VALUES ({$Val_Name_id},{$Val_Vacc},'{$Val_Date}',{$Val_Doctor})";

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
    header('location: vacreservation.php?');
}
