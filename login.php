<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("Location: users.php");
}
include_once 'header.php'; ?>

<body>
    <div class="wrapper">
        <section class="form login">
        <header><h2>متیچ</h2><br><p>چت برای همه</p></header>
            <form action="#">
                <div class="error-txt"></div>
            

                <div class="field input">
                    <label>ایمیل</label>
                    <input type="email" placeholder="ایمیل خود را وارد کنید" name="email" required>
                </div>

                <div class="field input">
                    <label>رمز عبور</label>
                    <input type="password" placeholder="رمز عبور خود را وارد کنید" name="password" required>
                    <i class="fas fa-eye"></i>
            
                </div>
                <div class="field button">
                    <input type="submit" value="به سوی چت">
                </div>
            </form>
            <div class="link">حساب ندارید؟ <a href="index.php">ثبت نام </a></div>
        </section>
    </div>
</body>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/login.js"></script>

</html>