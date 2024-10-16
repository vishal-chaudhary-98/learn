<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conn.php';

function register() {
    global $conn;
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
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

                    $stmt->bind_param("sssis",$fname, $mail, $uname, $cont, $pswd);
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
function login() {
    global $conn;
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
        $uname = $_POST['uname'];
        $pswd = $_POST['pswd'];

        if (!empty($uname) && !empty($pswd)) {
            if ($conn) {
                $query = 'SELECT * FROM user WHERE  user_name = ?';
                $stmt = $conn->prepare($query);
                $stmt->bind_param('s',$uname);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    if (password_verify($pswd,$user['password'])){
                    echo '<script>alert("Login successful!");</script>'; 
                        header('../dashboard.php');
                    // window.location="../dashboard.php";
                }
                } else {
                    echo '<script>alert("Invalid username or password");
                    window.location="../login.php";</script>'; exit();
                }
            }
        }
    }
}
register();
login();