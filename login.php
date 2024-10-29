<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- <div class="header">
        <h1>Login</h1>
    </div>  -->

    <!-- Container for both login sections -->
    <div class="login-section">

        <!-- Community Leader Login -->
        <section class="container">
            <div class="login-container">
                <div class="circle circle-one"></div>
                <div class="form-container">
                    <h1 class="opacity">LOGIN</h1>
                    <!-- <p>(Welcome As Community Leader)</p> -->
                    <p>(Welcome To Community)</p>
                    <form method="post" action="login_submit1.php">
                        <input type="email" name="email_address" placeholder="EMAIL ID" required style=
    "width: 93%;
    padding: 15px;
    margin: 5px 0;
    border-radius: 5px;
    border: 1px solid #ccc"/>
                        <input type="password" name="password" placeholder="PASSWORD" required />
                        <button class="opacity">SUBMIT</button>
                    </form>
                    <div class="register-forget opacity">
                        <a href="comlead.php">REGISTER</a>
                        <a href="#">FORGOT PASSWORD</a>
                    </div>
                </div>
            </div>
        </section> 

        <!-- Community Member Login
        <section class="container">
            <div class="login-container">
                <div class="circle circle-one"></div>
                <div class="form-container">
                    <h1 class="opacity">LOGIN</h1>
                    <p>(Welcome As Community Member)</p>
                    <form method="post" action="login_submit2.php">
                        <input type="email" name="email_address" placeholder="EMAIL ID" required style=
    "width: 93%;
    padding: 15px;
    margin: 5px 0;
    border-radius: 5px;
    border: 1px solid #ccc"/>
                        <input type="password" name="password" placeholder="PASSWORD" required />
                        <button class="opacity">SUBMIT</button>
                    </form>
                    <div class="register-forget opacity">
                        <a href="commem.php">REGISTER</a>
                        <a href="#">FORGOT PASSWORD</a>
                    </div>
                </div>
            </div>
        </section> -->

    </div>

</body>
</html>
