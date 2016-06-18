<?php
    

    class login
    {

        //Default constructor
        function _construct()
        {

        }

        function attemptLogin()
        {
            $thispass = "";
            if (isset($_POST['username'])) {
                $thisuser = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            }
            if (isset($_POST['password'])) {
                $thispass = $_POST['password'];
            }
            include_once('Resources/db.php');

            if (!isset($_SESSION)) {
                session_start();
            }

            try {
                $sql = "SELECT * FROM user_list LEFT JOIN client_list ON client_list.client_id = user_list.client_id WHERE username = :username";
                $result = $pdo->prepare($sql);

                $result->bindParam(":username", $thisuser);
                $result->execute();


                $num = $result->fetch(PDO::FETCH_ASSOC);
                $hash = $num['password'];
                if (password_verify($thispass, $hash)) {
                    if ($num > 1) {
                        $_SESSION['clientID'] = $num['client_id'];
                        $_SESSION['firstname'] = $num['firstname'];
                        $_SESSION['lastname'] = $num['lastname'];
                        $_SESSION['address_1'] = $num['address_1'];
                        $_SESSION['town'] = $num['town'];
                        $_SESSION['address_3'] = $num['address_3'];
                        $_SESSION['postcode'] = $num['postcode'];
                        $_SESSION['telephone'] = $num['telephone'];
                        $_SESSION['mobile'] = $num['mobile'];
                        $_SESSION['email'] = $num['email'];
                        $_SESSION['DOB'] = $num['DOB'];
                        $_SESSION['gender'] = $num['gender'];
                        $_SESSION['hobbies'] = $num['Hobbies'];
                        $_SESSION['accessLevel'] = $num['access_level'];

                       }
                        if ($_SESSION['accessLevel'] == 1) {
                            header('location:admin.php');
                        } else {
                            header('location:profile.php');
                        }
                    }

            } catch (PDOException $e) {
                echo "ERROR!: " . $e->getMessage();
                exit();
            }


        }




    }//end of class
