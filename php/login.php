<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pswd = mysqli_real_escape_string($con, $_POST['pswd']);
    
    if(!empty($email) && !empty($pswd))
    {
        $sql = mysqli_query($con,"SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql)> 0)
        {
            $row = mysqli_fetch_assoc($sql);
            $user_pswd = md5($pswd);        //new user entered password
            $enc_pswd = $row['pswd'];       //fetch password from database
            if($user_pswd === $enc_pswd)
            {
                $status = 'Active Now';
                $sql2 = mysqli_query($con,"UPDATE users SET status = '{$status}' WHERE unique_id ={$row['unique_id']}");
                if($sql2)
                {
                    $_SESSION['unique_id']= $row['unique_id'];
                    echo 'success';
                }
                else
                {
                    echo 'something went wrong. Please try again';
                }
            }
            else
            {
                echo 'Email or password is Incorrect!';
            }
        }
        else
        {
            echo $email.' this email is not exists';
        }
    }
    else
    {
        echo 'All input fields are required!';
    }

    ?>