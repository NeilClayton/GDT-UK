<?php
include ($_SERVER['DOCUMENT_ROOT'].'/GDT-UK/Resources/db.php');

date_default_timezone_set('Europe/London');

if(isset($_POST['addBooking'])){
    if(isset($_POST['timeSlot']) && isset($_POST['user'])){


        $client = $_POST['user'];
        $time = $_POST['timeSlot'];
        $duration = $_POST['duration'];
        $date = $_POST['booking_date'];

        $bookLesson = new lessons();
        $bookLesson->insertLesson($client, $time, $duration, $date);

    }
    else{
        echo "Oops! Not all fields were completed";
    }
}

class lessons
{

    
    function __construct()
    {

    }

    /**
     * @param $client
     * @param $startTime
     * @param $duration
     * @param $date
     * Used to insert new lesson into database and call emailConfirmation function if email is set.
     */
    public function insertLesson($client, $startTime, $duration, $date){
        $link = new db();
        $durationCounter = ($duration * 60) / 15;
        $lessonTime = strtotime($startTime);
        //$nextTime = strtotime($startTime);
        //$interval = 15*60;
        
        try{
            $sql = "SELECT firstname, lastname, email, telephone FROM client_list WHERE client_id = :id";
            $result = $link->pdo->prepare($sql);
            $result->bindParam(":id", $client);
            $result->execute();
            $learner = $result->fetch(PDO::FETCH_ASSOC);
            $fullName = $learner['firstname'] + " " + $learner['lastname'];
            $email = $learner['email'];
            $telephone = $learner['telephone'];
            $start = date('h:i:s', strtotime('+0 minutes', $lessonTime));

            for($i = 0; $i <= $durationCounter-1; $i++){
               $sql = "INSERT INTO bookings (date, start, client_id, email, phone) VALUES (:bookdate, :start, :client_id, :email, :phone)";
               $result = $link->pdo->prepare($sql);
               $result->bindParam(":bookdate", $date);
               $result->bindParam(":start", $start);
               $result->bindParam(":client_id", $client);
               $result->bindParam(":email", $email);
               $result->bindParam(":phone", $telephone);
               $result->execute();
               $nextTime = date("h:i:s", strtotime($start) + 900);
               $start = $nextTime;






            }
            
            $bookingMade = true;
        }
        catch (PDOException $e){
            $bookingMade = false;
            echo $e->getMessage();//"Oops!!! Booking not made due to error. Please try again!";
        }
        
        if($bookingMade && $email != Null){
                 $this->emailConfirmation($email, $startTime, $duration, $fullName, $date);
        }
        else{
            echo "no email address for learner";
        }
    }

    /**
     * @param $email
     * @param $time
     * @param $duration
     * @param $clientName
     * @param $date
     * Used to email confirmation of lesson booking to learner / client.
     */    
    private function emailConfirmation($email, $time, $duration, $clientName, $date){
        
        echo "Email Sent";
        
    }

    /**
     * getLessonsBooked function used to retrieve and print out in table form, lessons booked equal to or greater
     *than current date. optional parameter used to retrieve learner specific lessons
     */
    public function getLessonsBooked($learner = null){
        $link = new db();
        try{
            if (!empty($learner)){
                $sql = "SELECT id, bookings.client_id, date, start, duration, firstname, lastname, count(*) AS block FROM bookings LEFT JOIN client_list ON bookings.client_id = client_list.client_id WHERE date = CURDATE() OR date > CURDATE() AND bookings.client_id = :learner group by bookings.date";
                $result = $link->pdo->prepare($sql);
                $result->bindParam(":learner", $learner);
                $result->execute();
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    $newDate = date("d-m-Y", strtotime($row['date']));
                    echo '<tr ><td>' . $newDate . '</td><td>' . $row['start'] . '</td> <td>'. ($row['block']*15)/60 . " hr" .'</td></tr>';
                }
            }else{
                $sql = "SELECT id, bookings.client_id, date, start, duration, firstname, lastname, count(*) AS block FROM bookings LEFT JOIN client_list ON bookings.client_id = client_list.client_id WHERE date = CURDATE() OR date > CURDATE() group by bookings.date";
                $result = $link->pdo->prepare($sql);
                $result->execute();
                while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr><td>'. $row['id'] .'</td>';
                    echo '<td>'. $row['firstname'] . " " . $row['lastname'] .'</td>';
                    $newDate = date("d-m-Y", strtotime($row['date']));
                    echo '<td>'. $newDate .'</td>';
                    echo '<td>'. $row['start'] .'</td>';
                    echo '<td>'. ($row['block']*15)/60 . " hr" . ' </td>';
                    echo '<td><button type="button" name="'. $row['id'] .'" onclick="overlay_b()"><i class="fa fa-pencil"></i></button></td>';
                    echo '<td><button type="button" name="'. $row['id'] .'" onclick="overlay_b2()"><i class="fa fa-remove"></i></button></td></tr>';
                }
            }



        }
        catch (PDOException $e){
            echo "Unable to retrieve lesson information from database";
        }
    }
    

}