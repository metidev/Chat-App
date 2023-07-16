<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime ChatApp</header>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" name="fname" required>
                    </div>
                <div class="field input">
                    <label>Last Name</label>
                    <input type="text" placeholder="Last Name" name="lname" required>
                </div>
            </div>

                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter Email" name="email" required>
                </div>

                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter New Password" name="password" required>
                    <i class="fas fa-eye"></i>
            
                </div>

                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signup? <a href="login.php">Login now</a></div>
        </section>
    </div>
</body>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>
</html>