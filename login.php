<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("Location: users.php");
}
include_once 'header.php'; ?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime ChatApp</header>
            <form action="#">
                <div class="error-txt"></div>
            

                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter Email" name="email" required>
                </div>

                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your Password" name="password" required>
                    <i class="fas fa-eye"></i>
            
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signup? <a href="index.php">Signup now</a></div>
        </section>
    </div>
</body>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/login.js"></script>

</html>