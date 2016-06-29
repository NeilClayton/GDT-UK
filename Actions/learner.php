<?php
date_default_timezone_set("Europe/London");
if (session_status() == PHP_SESSION_NONE){
    session_start();
};

$pupil = new learner();

if (isset($_POST['e-firstname']) && isset($_POST['e-lastname']) && isset($_POST['e-date']) && isset($_POST['e-gender']) && isset($_POST['e-hobbies']) && isset($_POST['e-town'])){


    $first = filter_var($_POST['e-firstname'], FILTER_SANITIZE_STRING);
    $last = filter_var($_POST['e-lastname'], FILTER_SANITIZE_STRING);
    $date = filter_var($_POST['e-date'], FILTER_SANITIZE_STRING);
    list($day, $month, $year) = explode("-", $date);
    $DOB = $day . "/" . $month . "/" . $year;
        $gender = $_POST['e-gender'];
    $hobbies = filter_var($_POST['e-hobbies'], FILTER_SANITIZE_STRING);
    $town = filter_var($_POST['e-town'], FILTER_SANITIZE_STRING);

    $pupil->updateLearnerDetails($first, $last, $DOB, $gender, $hobbies, $town);


}
class learner
{
    public function __construct(){}


    public function updateLearnerDetails($first, $last, $date, $gender, $hobbies, $town){

        include_once ('../Resources/db.php');
        $db = new db();
        $sql = "UPDATE client_list SET firstname = :fname, lastname = :lname, address_3 = :town, DOB = :dob, gender = :Gender, Hobbies = :hobby WHERE client_id = :id";
        $result = $db->pdo->prepare($sql);
        $result->bindParam(":fname", $first);
        $result->bindParam(":lname", $last);
        $result->bindParam(":town", $town);
        $result->bindParam(":dob", $date);
        $result->bindParam(":Gender", $gender);
        $result->bindParam(":hobby", $hobbies);
        $result->bindParam(":hobby", $_SESSION['clientID']);
        $result->execute();
    }

}