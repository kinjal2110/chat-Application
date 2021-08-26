<?php
    session_start();
    if(isset($_SESSION['unique_id']))
    {
        include_once 'config.php';
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($con,$_POST['incoming_id']);
        $message = mysqli_real_escape_string($con,$_POST['message']);
echo 'hi';

        if(!empty($message))
        {
            $sql =  "INSERT INTO messages(incoming_msg_id,outgoing_msg_id,msg) VALUES ('{$outgoing_id}','{$incoming_id}','{$message}')";
            print_r($sql); exit;
        
            $query = mysqli_query($con,$sql) or die;

        }
    }
    else
    {
        header("Location: ../login.php");
    }
?>