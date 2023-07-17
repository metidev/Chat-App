<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("Location: login.php");
}

include_once 'header.php'; ?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <?php
                include_once "php/config.php";
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-right"></i></a>
                <img src="<?= 'php/images/' . $row['img'] ?>" alt="">
                <div class="details">
                    <span>
                        <?= $row['fname'] . " " . $row['lname'] ?>
                    </span>
                    <p>
                        <?= ($row['status'] == "Active Now" ? "اکنون فعال است" : "آخرین بازدید به تازگی")  ?>
                    </p>
                </div>
            </header>
            <div class="chat-box">
              
                
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" hidden value="<?= $_SESSION['unique_id'] ?>">
                <input type="text" name="incoming_id" hidden value="<?= $user_id ?>">
                <input class="input-field" name="message" type="text" placeholder="چیزی بنویسید...  ">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
</body>
<script src="javascript/chat.js"></script>

</html>