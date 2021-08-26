<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Real time chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label for="">Email Address:</label>
                        <input type="email" name="email" placeholder="Email your email here">
                    </div>

                    <div class="field input">
                        <label for="">Password: </label>
                        <input type="password" name="pswd" placeholder="Enter your password here">
                        <i class="fas fa-eye"></i>
                    </div>

                    <div class="field button input">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">signup Now</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>

</html>