<!DOCTYPE html>
<html>

<head>
    <title>Form Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <form method="POST" id="form" action="hasil.php">
        <div class="content">
            <h1>DJagram</h1>
            <h3>Sign up to see photos and videos<br>from your fiends</h3>
            <hr width="80%">
            <a href="facebook.com"><button type="button">Login with Facebook</button></a><br>
            <p style="margin: 5px;">OR</p>
            <input type="email" name="email" placeholder="Mobile Number or Email" required><br>
            <input type="text" name="name" placeholder="Full Name" required><br>
            <input type="text" name="username" placeholder="Username" required=""><br>
            <input type="password" name="password" placeholder="Password" required=""><br>
            <button type="submit">Sign Up</button><br>
            <p>By signing up, you agree to our<br><b>Terms & Privacy Policy</b>.</p>
        </div>
        <div id="bottom">
            <div class="content">
                <p>Have an account ? <a href="login">Login</a></p>
            </div>
        </div>
    </form>
</body>

</html>
