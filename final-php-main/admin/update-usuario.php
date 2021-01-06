<?php 
include('../includes/db.php');
include('../includes/functions.php');
$id = $_GET['id'];
//echo $id;
$post = getSeleccionarUsuario($id);

$error = array();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Sanity de los datos
  $usuario = trim($_POST['username']);
  $usuario = trim($_POST['username']);
  $password = trim($_POST['password']);
  $nombre = trim($_POST['nombre']);
  $apellidos = trim($_POST['apellidos']);
  $email = trim($_POST['email']);
  $foto = trim($_POST['foto']);
  $user_role = trim($_POST['user_role']);
  $randSalt = trim($_POST['randSalt']);
  $token = trim($_POST['token']);

  // Validaciones de los campos a ingresar
  if (strlen($usuario) < 4) {
    $error['username'] = 'Categoria debe ser mayor a 4 caracteres';
  }

  if (empty($usuario)) {
    $error['username'] = 'Username no debe ser vacío';
  }

  
  if(empty($error)){
    
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
    //$id=$_POST['cat_id']; 
    //$usuario = trim($_POST['username']);                
    $db->query("UPDATE users SET user_password=?, user_firstname = ?, user_lastname = ?, user_email = ?, user_image = ?,user_role=?, randSalt = ?, token = ? 
    WHERE user_id=?", array( $hashedPassword, $nombre, $apellidos, $email, $foto, $user_role, $randSalt, $token, $id));
    $insertId = $db->lastInsertId();
    $db->closeConnection();

    header("Location: usuarios.php");
   // $actualizarId = $db->getActualizarCategorie($id);
    //$db->closeConnection();
  }

}

?>

                    <h2 class="content-row-title">Listado Usuario
                      <span>(<b>Alerta</b>: <a href="#" style="color:#3BAFDA;">Tiene una columna actulizada</a>)</span>
                    </h2>
                    <div class="row">
                      <table class="table ">
                        <div class="bs-example">
                        <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Usuario</h3>
              </div>
                            <div class="panel-body">


                            <div class="content-row">

                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <div class="panel-title"><b>Actualizar Usuario</b>
                                  </div>

                                  <div class="panel-options">
                                    <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
                                    <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
                                    <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
                                  </div>
                                </div>

                                <div class="panel-body">
                                  <form novalidate="" role="form" class="form-horizontal" method="POST">
                                    <div class="form-group">
                                      <label for="username" class="col-md-2 control-label">Usuario</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Usuario" id="username" class="form-control" name="username" value="<?php echo $post['username']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="pass" class="col-md-2 control-label">Password</label>
                                      <div class="col-md-10">
                                        <input type="password" required="" placeholder="Ingresar Clave" id="password" class="form-control" name="password" value="<?php echo $post['user_password']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="nombre" class="col-md-2 control-label">Nombres</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Nombres" id="nombre" class="form-control" name="nombre" value="<?php echo $post['user_firstname']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="apellidos" class="col-md-2 control-label">Apellidos</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Apellidos" id="apellidos" class="form-control" name="apellido" value="<?php echo $post['user_lastname']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="email" class="col-md-2 control-label">Email</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Email" id="email" class="form-control" name="email" value="<?php echo $post['user_email']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="foto" class="col-md-2 control-label">Ingrese Foto</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Foto" id="foto" class="form-control" name="foto" value="<?php echo $post['user_image']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="usuario" class="col-md-2 control-label">Seleccione Rol</label>
                                      <div class="col-md-10">
                                      <select class="form-control"  id='user_role' name='user_role'>
                                        <option value='<?php echo $post['user_role']; ?>'>subscriber</option>
                                        <option value='Otros'>Otros</option>
                                      </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="randSalt" class="col-md-2 control-label">RandSalt</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Opcional" id="randSalt" class="form-control" name="randSalt"  value="<?php echo $post['randSalt']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="token" class="col-md-2 control-label">Token</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Token" id="token" class="form-control" name="token"  value="<?php echo $post['token']; ?>">
                                      </div>
                                    </div>
                                    
                                    <div class="form-group">
                                      <div class="col-md-offset-2 col-md-10">
                                        <button class="btn btn-info" type="submit">Actualizar</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>

                              </div>


              </div><!-- panel body -->
            </div>
                        </div>
                      </table>
                    </div>