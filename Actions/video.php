<?php
    class video{

        //default constructor
        public function __construct(){}

        //get all videos associated to the logged-in profile and display them
        function getTaggedVideos($id){
            include_once('Resources/db.php');
            try{
                $sql = "SELECT v_link, v_comment, v_date FROM videos WHERE client_id = :id ORDER BY v_date DESC";
                $result = $pdo->prepare($sql);
                $result->bindParam(":id", $id);
                $result->execute();

                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    if ($row > 1) {
                        $date = date("d-m-Y", strtotime($row['v_date']));
                        echo '<section class="col-sm-6 col-md-3">';
                        echo '<section class="embed-responsive embed-responsive-16by9 user-video">';
                        echo '<iframe class="embed-responsive-item" allowfullscreen width="800" height="450" src="https://www.youtube.com/embed/' . $row['v_link'] .'"></iframe>';
                        echo '</section>';
                        echo '<p class="comment">'. $row['v_comment'] .'<br><b class="pull-right">' . $date  . '</b></p>';
                        echo '</section>';
                    }
                    else{
                        echo '<h1>No Videos!</h1>h1>';
                    }
                }
            }
            catch (PDOException $e)
            {
                echo '<h1>Oops something went wrong, please try again';
                exit;
            }
        }
    }




?>