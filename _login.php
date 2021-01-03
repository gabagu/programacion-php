<?php 
session_start();
include('includes/db.php');

define('dbhost', '127.0.0.1');
define('dbport', 3306);
define('dbname', 'cms');
define('dbuser', 'root');
define('dbpassword', 'root');

$db = new Database(dbhost, dbport, dbname, dbuser, dbpassword);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])){
    loginUser($_POST['username'], $_POST['password']);
    } else {
        header("Location: /");
    }
}

function loginUser($username, $password) {

    global $db;
    $username = trim($username);
    $password = trim($password);

    $row = $db->row("SELECT * FROM users WHERE username=? ", array($username));

    //var_dump($row);
    if (password_verify($password, $row['user_password'])) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['firstname'] = $row['user_firstname'];
        $_SESSION['lastname'] = $row['user_lastname'];
        $_SESSION['user_role'] = $row['user_role'];
        //var_dump($_SESSION);
        header("Location: /final/admin");
    } else {
        return false;
    }
    return true;
}
?>
<?php include('includes/header.php');?>
<?php include('includes/navigation.php'); ?>

<div class="container">
    <div class="row">

    <?php include('includes/login-form.php'); ?>

    </div>
<?php include('includes/footer.php'); ?>