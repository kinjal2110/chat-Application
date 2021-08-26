<?php
    session_start();
    include_once 'config.php';
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($con,$sql);
    $output = "";
    if(mysqli_num_rows($query) == 1)
    {
        $output .= 'No users are avialable to chat';
    }
    else if(mysqli_num_rows($query) > 0)
    {
      
        include_once 'data.php';
    }
    echo $output;
?>