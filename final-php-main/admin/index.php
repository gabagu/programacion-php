<?php include('../includes/db.php');?>
<?php include('../includes/functions.php'); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['username']) && isset($_POST['password'])){
      // Iniciar sesión
      header("Location: principal.php");
      loginUser($_POST['username'], $_POST['password']);
  } else {
    header("Location: index.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de acceso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    

</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Página de acceso</h3>
        <div class="candado">
            <img width="100px" height="100px" src="img/candado.png" alt="Candado">
        </div>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login GABAGU</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Clave:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Recordar</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            </div>
                            <div class="form-group center">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Iniciar Sesión">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>
</html>