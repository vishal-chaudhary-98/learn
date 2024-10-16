<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
    </head>
    <body>
        <center>
            <br>
            <h3>Login yourself below :</h3><br>
            <form action= "DB/DB-alter.php" method= "post">
                <label for = "User name">User name :</label>
                <input type ="text" name = "uname" placeholder = "Enter your username" required/>
                <br><br>
                <label for = "User password">User password :</label>
                <input type = "password" name = "pswd" placeholder = "****"required />
                <br><br>
                <input type="hidden" name="login" value="1" />
                <input type = "submit" name = "submit" />
        </form>
        <p>Don't have any account ? <a href = "register.php">Signup here!</a></p>
        <p>Go back to home ? <a href = "index.php">Click here</a></p>
        </center>
    </body>
</html>