<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
};
/**
 * Created by PhpStorm.
 * User: Neil
 * Date: 27/06/2016
 * Time: 09:25
 */

$mess = new messages();
if(isset($_GET['msg'])){

    $conversationID = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
    $msgText = filter_var($_GET['msg'], FILTER_SANITIZE_STRING);
    $mess->addMessage($conversationID,$msgText);

}

if (isset($_GET['newMsg'])){
    $newMsgText = filter_var($_GET['newMsg'], FILTER_SANITIZE_STRING);
    $mess->newMessageFeed($newMsgText);
}


class messages
{


    public function __construct(){


    }

    public function getMessages($id)
    {
        include_once('Resources/db.php');
        $db = new db();
        try {
            $sql = "SELECT sender_id, to_id, message, m_date, firstname, lastname, image, conv_id FROM messages LEFT JOIN client_list ON messages.sender_id=client_list.client_id WHERE sender_id = :id OR to_id = :id ORDER BY conv_id DESC, m_date ASC";
            $result = $db->pdo->prepare($sql);
            $result->bindParam(":id", $id);
            $result->execute();
            $conversationIndex = 1;
            $messageIndex = 0;
            $firstMessagePrinted = 0;
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                if ($row > 1) {
                    if ($conversationIndex != $row['conv_id']) {
                        $messageIndex = 0;
                        if($firstMessagePrinted>0) {
                            echo '<div class="new-reply">';
                            echo '<form method="post" action="#">';
                            echo '<textarea id="comment' . $conversationIndex . '" class="form-control" id="reply-message" rows="3" cols="100" maxlength="600" required placeholder="Write a reply..."></textarea>';
                            echo '<button type="submit" id="insertComment" name="' . $conversationIndex . '" class="btn btn-success pull-right">Reply&nbsp;&nbsp;<i class="fa fa-comments"></i></button>';
                            echo '</form>';
                            echo '<button type="button" class="d-button" onclick="d_message()">Delete</button>';
                            echo '</div>';
                            echo '</div>';
                        }
                        echo '</div>';
                        $conversationIndex = $row['conv_id'];
                    }

                    $date = date("h:i d-m-Y", strtotime($row['m_date']));
                    if ($messageIndex == 0 && $conversationIndex == $row['conv_id']) {
                        echo '<div class="user-post">';
                        echo '<div class="user-details">';
                        echo '<img src="' . $row['image'] . '" width="75" height="75" class="img-responsive img-circle" alt="profile">';
                        echo '<h2><a href="#">' . $row['firstname'] . " " . $row['lastname'] . '</a><b class="pull-right datetime">' . $date . '</b></h2>';
                        echo '</div>';
                        echo '<div class="user-message">';
                        echo '<p>' . $row['message'] . '</p>';
                        echo '</div>';
                        echo '<div class="user-replies">';
                        $messageIndex++;
                        $firstMessagePrinted++;
                    } elseif ($messageIndex != 0 && $conversationIndex == $row['conv_id']) {
                        echo '<div class="user-reply">';
                        echo '<div class="reply-details">';
                        echo '<img src="' . $row['image'] . '" width="50" height="50" class="img-responsive img-circle" alt="profile">';
                        echo '<h4><a href="#">' . $row['firstname'] . " " . $row['lastname'] . '</a><b class="pull-right r-datetime">' . $date . '</b></h4>';
                        echo '</div>';
                        echo '<div class="reply-message">';
                        echo '<p>' . $row['message'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        $messageIndex++;
                    } else {
                        echo 'There are no current conversations';
                    }


                }


            }
                echo '<div class="new-reply">';
                echo '<form method="post" action="#">';
                echo '<textarea id="comment' . $conversationIndex . '" class="form-control" id="reply-message" rows="3" cols="100" maxlength="600" required placeholder="Write a reply..."></textarea>';
                echo '<button type="submit" id="insertComment" name="' . $conversationIndex . '" class="btn btn-success pull-right">Reply&nbsp;&nbsp;<i class="fa fa-comments"></i></button>';
                echo '</form>';
                echo '<button type="button" class="d-button" onclick="d_message()">Delete</button>';
                echo '</div>';
                echo '</div>';
            } catch (PDOException $e){
            echo '<h1>Oops something went wrong, please try again';
            exit;
            }
    }

            public
            function addMessage($id, $msg)
            {

                try {

                    include_once('../Resources/db.php');
                    $db = new db();

                    $sql = 'INSERT INTO messages (sender_id, to_id, message, conv_id) VALUES (:clientID, "1" , :text, :id)';
                    $result = $db->pdo->prepare($sql);
                    $result->bindParam(":clientID", $_SESSION['clientID']);
                    $result->bindParam(":text", $msg);
                    $result->bindParam(":id", $id);
                    $result->execute();


                } catch (PDOException $e) {
                    echo 'Oops!, something is not quite working as it should';
                }
            }

            public
            function newMessageFeed($msgText)
            {
                try {
                    include_once('../Resources/db.php');
                    $db = new db();
                    $sql = 'INSERT INTO conversations (creator) VALUES (:clientID); INSERT INTO messages (sender_id, to_id, message, conv_id) VALUES (:clientID, "1" , :text, LAST_INSERT_ID());';
                    $result = $db->pdo->prepare($sql);
                    $result->bindParam(":clientID", $_SESSION['clientID']);
                    $result->bindParam(":text", $msgText);
                    $result->execute();


                } catch (PDOException $e) {
                    echo 'Message not posted, something when wrong';
                }
            }
}
