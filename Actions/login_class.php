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
                $sql = "SELECT user_id, username, password, access_level, client_id FROM user_list WHERE username = :username";
                $result = $pdo->prepare($sql);

                $result->bindParam(":username", $thisuser);
                $result->execute();


                $num = $result->fetch(PDO::FETCH_ASSOC);
                $hash = $num['password'];
                if (password_verify($thispass, $hash)) {
                    if ($num > 1) {
                        $_SESSION['userID'] = $num['user_id'];
                        $_SESSION['username'] = $thisuser;
                        $_SESSION['accessLevel'] = $num['access_level'];
                        $_SESSION['clientID'] = $num['client_id'];

                        $sql2 = "SELECT * FROM client_list WHERE client_id = :id";
                        $result = $pdo->prepare($sql2);

                        $result->bindParam(":id", $_SESSION['clientID']);
                        $result->execute();
                        $num = $result->fetch(PDO::FETCH_ASSOC);
                        if ($num > 1) {
                            $_SESSION['firstname'] = $num['firstname'];
                            $_SESSION['lastname'] = $num['lastname'];
                            $_SESSION['address1'] = $num['address_1'];
                            $_SESSION['town'] = $num['town'];
                            $_SESSION['address3'] = $num['address_3'];
                            $_SESSION['postcode'] = $num['postcode'];
                            $_SESSION['telephone'] = $num['telephone'];
                            $_SESSION['mobile'] = $num['mobile'];
                            $_SESSION['email'] = $num['email'];
                            $_SESSION['dob'] = $num['DOB'];
                            $_SESSION['gender'] = $num['gender'];
                            $_SESSION['hobbies'] = $num['Hobbies'];
                        }
                        if ($_SESSION['accessLevel'] == 1) {
                            header('location:admin.php');
                        } else {
                            header('location:profile.php');
                        }
                    }
                }

            } catch (PDOException $e) {
                echo "ERROR!: " . $e->getMessage();
                exit();
            }


        }




    }//end of class
