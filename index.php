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
        <section class="form signup">
            <header>Real time chat App</header>
            <form autocomplete="off" action="#" method="POST"  enctype="multipart/form-data">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label for="">Email Address:</label>
                        <input type="email" name="email" placeholder="Email your email here" required>
                    </div>

                    <div class="field input">
                        <label for="">Password: </label>
                        <input type="password" name="pswd" placeholder="Enter your password here" required>
                        <i class="fas fa-eye"></i>
                    </div>

                    <div class="field image">
                        <label for="">Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button input">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src='js/signup.js'></script>
    </script>
</body>

</html>