<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("Location: users.php");
}
include_once 'header.php'; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header><h2>متیچ</h2><br><p>چت برای همه</p></header>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>نام</label>
                        <input type="text" placeholder="نام" name="fname" required>
                    </div>
                <div class="field input">
                    <label>نام خانوادگی</label>
                    <input type="text" placeholder="نام خانوادگی" name="lname" required>
                </div>
            </div>

                <div class="field input">
                    <label>ایمیل</label>
                    <input type="email" placeholder="ایمیل را وارد کنید" name="email" required>
                </div>

                <div class="field input">
                    <label>رمز عبور</label>
                    <input type="password" placeholder="رمز عبور جدید را وارد کنید" name="password" required>
                    <i class="fas fa-eye"></i>
            
                </div>

                <div class="field image">
                    <label for="file-upload">انتخاب عکس پروفایل</label>
                    <input hidden id="file-upload" type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="به سوی چت">
                </div>
            </form>
            <div class="link">قبلا ثبت نام کردید؟ <a href="login.php">ورود</a></div>
        </section>
    </div>
</body>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>
</html>