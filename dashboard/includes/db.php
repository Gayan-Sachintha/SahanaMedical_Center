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

function isLogged(){
    if(isset($_SESSION['loggedinadmin'])){
        if($_SESSION['loggedinadmin']){
            if(isset($_SESSION['usernameadmin'])){
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
    function getStaffUserData($data){
        $username = $_SESSION['usernameadmin'];
        $sql = mysqli_query(db(), "SELECT * FROM `staff` WHERE username = '$username' ");
        $getData = mysqli_fetch_array($sql);
        $data = $getData[$data];
    
        return "$data";
    }

    function isUserEmployee(){
        $data = getStaffUserData("type");
        if($data == "employee"){
            return true;
        } else {
            return false;
        }
    
    }

    
}




function getDoctorData($doctor, $data){
    $sql = mysqli_query(db(), "SELECT * FROM `doctors` WHERE id = '$doctor' ");
    $getData = mysqli_fetch_array($sql);
    $data = $getData[$data];

    return "$data";
}


function getPatientData($patient, $data){
    $sql = mysqli_query(db(), "SELECT * FROM `users` WHERE id = '$patient' ");
    $getData = mysqli_fetch_array($sql);
    $data = $getData[$data];

    return "$data";
}

function getStaffData($employee, $data){
    $sql = mysqli_query(db(), "SELECT * FROM `staff` WHERE id = '$employee' ");
    $getData = mysqli_fetch_array($sql);
    $data = $getData[$data];

    return "$data";
}

function get($data){
    return mysqli_real_escape_string(db(), $_GET[$data]);
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

function fetchAppointments($date){

    if($date == "*"){
        $sql = "SELECT * FROM `appointments` ORDER BY `appointments`.`id` ASC" ;
    } else {
        $sql = "SELECT * FROM `appointments` WHERE `appointment_Date` = '$date'  ORDER BY `appointments`.`id` ASC" ;
    }
    $data = db()->query($sql);

    return $data;
}

function fetchAppointments3(){
    $sql = "SELECT * FROM `appointments` ORDER BY `appointments`.`id` DESC LIMIT 3" ;
    $data = db()->query($sql);

    return $data;
}

function fetchPatients(){
    $sql = "SELECT * FROM `users` ORDER BY `id` ASC" ;
    $data = db()->query($sql);

    return $data;
}

function fetchPatients3(){
    $sql = "SELECT * FROM `users` ORDER BY `id` DESC LIMIT 3" ;
    $data = db()->query($sql);

    return $data;
}

function fetchStaff($type){
    $sql = "SELECT * FROM `staff` WHERE `type` = '$type' ORDER BY `staff`.`id` ASC" ;
    $data = db()->query($sql);

    return $data;
}

function countOfDoctors(){
    $sql = mysqli_query(db(), "SELECT * FROM `doctors`");
    $return = mysqli_num_rows($sql);

    return $return;

}

function countOfPatients(){
    $sql = mysqli_query(db(), "SELECT * FROM `users`");
    $return = mysqli_num_rows($sql);

    return $return;

}

function countOfTodayAppointments(){
    $date = currentDate();
    $sql = mysqli_query(db(), "SELECT * FROM `appointments` WHERE `appointment_Date` = '$date' ");
    $return = mysqli_num_rows($sql);

    return $return;

}
function redirect($url)
{
    echo "<script>window.location.href = '$url';</script>";
    die();
}
?>