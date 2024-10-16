<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conn.php';

function register() {
    global $conn;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fname = $_POST['fname'];
        $mail = $_POST['mail'];
        $uname = $_POST['uname'];
        $cont = $_POST['cont'];
        $pswd = $_POST['pswd'];
        $cpswd = $_POST['cpswd'];

        if (!empty($fname) && !empty($mail) && !empty($uname) && !empty($cont) && !empty($pswd) && !empty($cpswd)) {
            if ($pswd !== $cpswd) {
                echo '<script>alert("Password and confirm password does not match");
                window.location="../"</script>';exit();
            }
                if ($conn) {
                    $query = 'INSERT INTO user (full_name, mail, user_name, contact, password) VALUES (?, ?, ?, ?, ?)';
                    $stmt = $conn->prepare($query);

                    $stmt->bind_param("ssiss",$fname, $mail, $uname, $cont, $pswd);
                    if ($stmt->execute())  {
                        echo '<script>alert("Registr sucessfully!");
                        window.location="../login.php";</script>';exit();
                    }   else {
                        echo '<script>alert("Registration failed!");
                        window.location="../register.php";</script>';exit();
                    } 
                    
                }   else {
                    echo '<script>alert("Database connection failed");
                    window.location="../register.php";</script>';exit();
                }
        }   else {
            echo '<script>alert("All fields are required");
            window.location="../register.php";</script>';exit();
        }
    }
}
register();