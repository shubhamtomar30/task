<?php

session_start();
include("db_connect.php");

    if(isset($_POST['g-recaptcha-response']))
    {
        $secretkey = '6LfZD-gcAAAAAPLbCupJRcJdapsD4T5v-YXlWqgS';
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = ('https://www.google.com/recaptcha/api/siteverify?secret=' .$secretkey .  '&response=' . $_POST['g-recaptcha-response']);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response);
        if($responseKeys -> success)
        
        {
            echo $n = $_POST['name'];
            echo $e = $_POST['email'];
            $d = $_POST['date'];
            $a = $_POST['au'];
            $data = "INSERT INTO task(name , email , date , about)value('$n' , '$e' , '$d' , '$a')";
            mysqli_query($con , $data);
            
        }
        else{
            echo 'sgsgv';
            $_SESSION['error'] = "invalid username or password";
            // header('location:task.php');
        }
    }
    else{
        echo 'dfbfb';
        $_SESSION['error'] = "invalid username or password";
        // header('location:task.php');
    }











?>