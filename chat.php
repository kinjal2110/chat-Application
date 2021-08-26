<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("Location: login.php");
}
?>
<?php include_once 'header.php' ?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <?php
                include_once "php/config.php";
                $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
                $sql = mysqli_query($con, "SELECT * FROM users WHERE  unique_id = {$user_id}");
                if (mysqli_num_rows($sql) > 0) //if rows  are more than 0 in database
                {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>

                <a href="users.php" class="fas fa-arrow-left"></a>
                <img src="php/uploaded_image/<?php echo $row['image'] ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                    <p><?php echo $row['status']; ?></p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <img src="images/istockphoto-539973144-170667a.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nobis aliquam consectetur cumque officia sapiente commodi sunt amet eligendi ab facilis beatae fuga eos voluptatem earum deserunt, minima provident illo.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="images/istockphoto-539973144-170667a.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nobis aliquam consectetur cumque officia sapiente commodi sunt amet eligendi ab facilis beatae fuga eos voluptatem earum deserunt, minima provident illo.</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <img src="images/istockphoto-539973144-170667a.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nobis aliquam consectetur cumque officia sapiente commodi sunt amet eligendi ab facilis beatae fuga eos voluptatem earum deserunt, minima provident illo.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="images/istockphoto-539973144-170667a.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nobis aliquam consectetur cumque officia sapiente commodi sunt amet eligendi ab facilis beatae fuga eos voluptatem earum deserunt, minima provident illo.</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area" autocomplete="off">
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" name="" id="" hidden>
                 <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" name="" id="" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here..">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
            
            <form action="#" class="typing-area" autocomplete="off">
            </form>
        </section>
    </div>

    <script src="js/chat.js"></script>

</body>

</html>