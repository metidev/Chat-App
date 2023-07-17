<?php 
session_start();
if(!isset($_SESSION['unique_id'])){
    header("Location: login.php");
}

include_once 'header.php'; ?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
            <?php 
            include_once "php/config.php";
                $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
                <div class="content">
                    <img src="<?= 'php/images/' . $row['img'] ?>" alt="">
                    <div class="details">
                        <span><?= $row['fname'] . " " . $row['lname'] ?></span>
                        <p><?= ($row['status'] == "Active Now" ? "اکنون فعال است" : "آخرین بازدید به تازگی")  ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?= $row['unique_id'] ?>" class="logout">خروج</a>
            </header>
           
            <div class="search">
                <span class="text">برای شروع گفتگو یک کاربر را انتخاب کنید</span>
                <input type="text" placeholder="نام کاربر را برای جستجو وارد کنید..." name="" id="">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="user-list">
             
            </div>
        </section>
    </div>
</body>
<script src="javascript/users.js"></script>

</html>