<?php

    class login{

        //Default constructor
        function _construct(){}

        function attemptLogin(){
            if (isset($_POST['username'])){
                $thisuser = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            }
            if (isset($_POST['password'])){
                $thispass = md5($_POST['password']);
            }
            include_once ('Resources/db.php');

            if (!isset($_SESSION)){
                session_start();
            }

            try{
                $sql = "SELECT user_id, username, access_level, client_id FROM user_list WHERE username = :username AND password = :password";
                $result = $pdo->prepare($sql);

                $result->bindParam(":username", $thisuser);
                $result->bindParam(":password", $thispass);

                $result->execute();
            } catch (PDOException $e){
                echo "ERROR!: " . $e->getMessage();
                exit();
            }

            $num = $result->fetch(PDO::FETCH_ASSOC);
            if ($num > 1){
                $_SESSION['userID'] = $num['user_id'];
                $_SESSION['username'] = $thisuser;
                $_SESSION['accessLevel'] = $num['access_level'];
                $_SESSION['clientID'] = $num['client_id'];

                if ($_SESSION['accessLevel'] == 1){
                    header('location:admin.php');
                }
                else{
                    header('location:profile.php');
                }
            }

        }


    } //end of class


