<?php 
include('includes/db.php');

define('dbhost', '127.0.0.1');
define('dbport', 3306);
define('dbname', 'cms');
define('dbuser', 'root');
define('dbpassword', 'root');

$db = new Database(dbhost, dbport, dbname, dbuser, dbpassword);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    $error = [
        'username'=> '',
        'email'=>'',
        'password'=>''

    ];

    if(strlen($username) < 4){
        $error['username'] = 'Username needs to be longer';
    }

    if($username == ''){
        $error['username'] = 'Username cannot be empty';
    }

    /*
    if(username_exists($username)){
        $error['username'] = 'Username already exists, pick another another';
    }*/

    if($email == ''){
        $error['email'] = 'Email cannot be empty';
    }
    
    /*
    if(email_exists($email)){
        $error['email'] = 'Email already exists, <a href="index.php">Please login</a>';
    }*/

    if($password == '') {
        $error['password'] = 'Password cannot be empty';
    }

    foreach ($error as $key => $value) {
        if(empty($value)){
            unset($error[$key]);
        }
    }

    if(empty($error)){
        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        $db->query("INSERT INTO users(username, user_email, user_password, user_role) 
                VALUES(?,?,?,?)", array($username, $email, $password, 'subscriber'));
        $insertId = $db->lastInsertId();
        $db->closeConnection();
        $data['success'] = "Usuario " . $username . " registrado con éxito";
    }
}
?>

<?php include('includes/header.php');?>
<?php include('includes/navigation.php'); ?>

<div class="container">
    <div class="row">

    <?php include('includes/register-form.php'); ?>

    </div>
<?php include('includes/footer.php'); ?>