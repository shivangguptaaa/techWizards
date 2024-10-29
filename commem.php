<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up As Member</title>
    <link rel="stylesheet" href="css/signup1.css">
</head>
<body>
        <section class="container1">
            <div class="login-container">
                <div class="circle circle-one"></div>
                <div class="form-container">
                
                    <h1 class="opacity">Sign Up</h1>
                    <p class="do">(Welcome As Community Member)</p>
                    <form method="post" action="commemregister.php">
                        <input type="text" name="first_name" placeholder="FIRST NAME" required>
                        <input type="text" name="last_name" placeholder="LAST NAME" required>
                        <input type="number" name="phone_number" placeholder="PHONE NUMBER" >
                        <input type="email" name="email_address" placeholder="EMAIL ADDRESS" required>
                        <input type="password" name="password" placeholder="CREATE PASSWORD" required>
                        <input type="date" name="date_of_birth" required>
                        <select name="gender" class="gender-select" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                            <option value="prefer-not-to-say">Prefer not to say</option>
                        </select>
                        
                        <button class="opacity">REGISTER</button>
                    </form>
                </div>
                
            </div>
            <div class="theme-btn-container"></div>
        </section>
        
</body>
</html>
