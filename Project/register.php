<!DOCTYPE html>
<html>
    <head>
        <title>Registeration page</title>
    </head>
    <body>
        <center>
            <br>
            <h3>Register yourself below :</h3><br>
            <form action= "DB/DB-alter.php" method= "post">
            <label for = "fname">Full name :</label>
                <input type ="text" id ="fname" name = "fname" placeholder = "Enter your name" />
                <br><br>
                <label for = "mail">E-mail :</label>
                <input type ="email" id = "mail" name = "mail" placeholder = "name@example.com" />
                <br><br>
                <label for = "uname">User name :</label>
                <input type ="text" id = "uname" name = "uname" placeholder = "Enter your username" />
                <br><br>
                <label for = "cont">Contact :</label>
                <input type ="tel" id = "cont" name = "cont" placeholder = "Enter your contact number" />
                <br><br>
                <label for = "pswd">User password :</label>
                <input type = "password" id = "pswd" name = "pswd" placeholder = "****" />
                <br><br>
                <label for = "cpswd">confirm password :</label>
                <input type = "password" id = "cpswd" name = "cpswd" placeholder = "****" />
                <br><br>
                <input type="hidden" name="register" value="1" />
                <input type = "submit" name = "submit" />
        </form>
        <p>Already a user ? <a href = "login.php">Signin here!</a></p>
        <p>Go back to home ? <a href = "index.php">Click here</a></p>
        </center>
    </body>
</html>