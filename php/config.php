<?php
    $con = mysqli_connect('localhost','root','','chatApp');
    if($con)
    {
        echo mysqli_connect_error();
    }
    else
    {
        echo 'error in loading database';
    }

?>