<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register & Login</title>
</head>

<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-tittle">Register</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName"
                    placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName"
                    placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email"
                    placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password"
                    placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="SignUp">
        </form>
        <p class="or">
            -------------------or--------------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fa-brands fa-facebook"></i>

        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton"> Sign In</button>
        </div>
    </div>
    <!--  -->
    <div class="container" id="signIn">
        <h1 class="form-tittle">Sign In</h1>
        <form action method="post">

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email"
                    placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password"
                    placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="SignIn">
        </form>
        <p class="or">
            -------------------or--------------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fa-brands fa-facebook"></i>

        </div>
        <div class="links">
            <p>Don't Have Account Yet</p>
            <button id="signUpButton"> Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>