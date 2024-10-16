<!DOCTYPE html>
<html>
    <head>
        <title>Registeration page</title>
    </head>
    <body>
        <center>
            <br>
            <h3>Register yourself below :</h3><br>
            <form action= "" method= "post">
            <label for = "Full name">Full name :</label>
                <input type ="text" name = "fname" placeholder = "Enter your name" required/>
                <br><br>
                <label for = "email">E-mail :</label>
                <input type ="email" name = "mail" placeholder = "name@example.com" required/>
                <br><br>
                <label for = "Contact">Contact :</label>
                <input type ="number" name = "cont" placeholder = "Enter your contact number" required/>
                <br><br>
                <label for = "User name">User name :</label>
                <input type ="text" name = "uname" placeholder = "Enter your username" required/>
                <br><br>
                <label for = "User password">User password :</label>
                <input type = "password" name = "pswd" placeholder = "****"required />
                <br><br>
                <label for = "confirm password">confirm password :</label>
                <input type = "password" name = "cpswd" placeholder = "****"required />
                <br><br>
                <input type = "submit" name = "submit" />
        </form>
        <p>Already a user ? <a href = "login.php">Signin here!</a></p>
        <p>Go back to home ? <a href = "index.php">Click here</a></p>
        </center>
    </body>
</html>