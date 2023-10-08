<?php 
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'yomalsql.2023');
define('DB_NAME', 'sahanamedical');
date_default_timezone_set("Asia/Colombo");


function db(){
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $conn;
}

function postData($data){
    $return = mysqli_real_escape_string(db(), $_POST[$data]);

    return "$return";
}

function get($data){
    return mysqli_real_escape_string(db(), $_GET[$data]);
}

function redirect($url)
{
    echo "<script>window.location.href = '$url';</script>";
    die();
}

function alert($msg){
    echo "<script>alert('$msg');</script>";
}

function isLogged(){
    if(isset($_SESSION['loggedin'])){
        if($_SESSION['loggedin']){
            if(isset($_SESSION['username'])){
                return true;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

if(isLogged()){
    function getUserData($data){
        $username = $_SESSION['username'];
        $sql = mysqli_query(db(), "SELECT * FROM `users` WHERE username = '$username' ");
        $getData = mysqli_fetch_array($sql);
        $data = $getData[$data];
    
        return "$data";
    }
}

function fetchDoctors(){
    $sql = "SELECT * FROM `doctors` ORDER BY `doctors`.`id` ASC" ;
    $data = db()->query($sql);

    return $data;
}

function currentDate(){
    $data = date('Y-m-d');
    
    return "$data";
}


function createAppointmentId($doctor){
    $date = currentDate();
    $sql = mysqli_query(db(), "SELECT * FROM `appointments`  WHERE `appointment_toDoctor` = '$doctor' ORDER BY `appointments`.`id` DESC");
    //SELECT * FROM `appointments` ORDER BY `appointments`.`id` DESC
    $getData = mysqli_fetch_array($sql);

    if(!is_null($getData)){
        $appointment_id = $getData['appointment_id'];
        $appointment_date = $getData['appointment_Date'];
    } else {
        $appointment_id = 0;
        $appointment_date = $date;
    }

    
    if($appointment_id >= 20){
        if($appointment_date == $date){
            return false;
        } else {
            $appointment_id = 1 ;
        }
    } else {
        $appointment_id = $appointment_id + 1 ;
    }

    return $appointment_id;
}

function ifAppointmentsReached($doctor){
    $date = currentDate();
    $sql = mysqli_query(db(), "SELECT * FROM `appointments` WHERE `appointment_toDoctor` = '$doctor' ORDER BY `appointments`.`id` DESC ");
    //SELECT * FROM `appointments` ORDER BY `appointments`.`id` DESC
    $getData = mysqli_fetch_array($sql);

    if(!is_null($getData)){
        $appointment_id = $getData['appointment_id'];
        $appointment_date = $getData['appointment_Date'];
    } else {
        $appointment_id = 0;
        $appointment_date = $date;
    }



    
    if($appointment_id >= 20){
        if($appointment_date == $date){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }

}


?>