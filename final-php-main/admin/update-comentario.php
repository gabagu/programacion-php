<?php 
include('../includes/db.php');
include('../includes/functions.php');
$id = $_GET['id'];
echo $id;

//$comentarios = getCommentsAdmin($id);
$comentarios = getupdateStatus($id);
//$comentarios = var_dump($comentarios);
print_r($comentarios);
//echo $comentarios[0];


foreach ($comentarios as list($id)) {
  // $a contiene el primer elemento del array interior,
  // y $b contiene el segundo elemento.
  echo "A: $id";
}
/*
if(is_array($comentarios){
  foreach($comentarios as '$id'=>'$value') { 
       echo "<br/>". $id ;  // $k is the key 
  }
}
*/






 
//$comentarios = getCommentsAdmin('$key' => '$id');
//echo $comentarios[0];

//echo $comentarios[0];
//print_r($comentarios[0]);
//print_r(array_keys($comentarios[$id]));
//print_r(array_keys(getCommentsAdmin($id)));

//$error = array();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Sanity de los datos
  /*
  $categoria = trim($_POST['categoria']);
  $titulo = trim($_POST['titulo']);
  $autor = trim($_POST['autor']);
  $usuario = trim($_POST['usuario']);
  $fecha = trim($_POST['fecha']);
  $imagen = trim($_POST['imagen']);
  $contenido = trim($_POST['contenido']);
  $tags = trim($_POST['tags']);
  $contador = trim($_POST['contador']);
  $status = trim($_POST['status']);
  $vistas = trim($_POST['vistas']);
  */
  // Validaciones de los campos a ingresar

  /*
  if (strlen($usuario) < 4) {
    $error['username'] = 'Categoria debe ser mayor a 4 caracteres';
  }
  if (empty($usuario)) {
    $error['username'] = 'Username no debe ser vacío';
  }
  if(empty($error)){
   
    $db->query("UPDATE posts SET post_category_id = ?, post_title = ?, post_author = ?, post_user = ?, post_date = ?,post_image = ?, post_content = ?, post_tags = ?, post_comment_count = ?, post_status = ?, post_views_count = ? 
    WHERE 	post_id=?", array($categoria, $titulo, $autor, $usuario, $fecha, $imagen, $contenido, $tags, $contador, $status, $vistas, $id));
            $insertId = $db->lastInsertId();
    $db->closeConnection();
    header("Location: post.php");
   // $actualizarId = $db->getActualizarCategorie($id);
    //$db->closeConnection();
  }*/
}
?>
                    <h2 class="content-row-title">Listado Comentario
                    
                      <span>(<b>Alerta</b>: <a href="#" style="color:#3BAFDA;">Tiene una columna actulizada</a>)</span>
                    </h2>
                    <div class="row">
                      <table class="table ">
                        <div class="bs-example">
                        <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Commentario</h3>
              </div>
                            <div class="panel-body">


                            <div class="content-row">

                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <div class="panel-title"><b>Actualizar Comentario</b>
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
                                      <label for="comentario" class="col-md-2 control-label">Comment Post Id</label>
                                      <div class="col-md-10">
                                      <input type="text" required="" placeholder="Ingresar Categoria" id="comentario" class="form-control" name="comentario" value="<?php echo $id;?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="comment_author" class="col-md-2 control-label">Autor</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Autor" id="comment_author" class="form-control" name="comment_author" value="<?php echo $comentarios['comment_author'];?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="comment_email" class="col-md-2 control-label">Email</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Email" id="comment_email" class="form-control" name="comment_email" value="<?php echo $comentarios['comment_email'];?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="contenido" class="col-md-2 control-label">Contenido</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Contenido" id="contenido" class="form-control" name="contenido" value="<?php echo $comentarios['comment_content'];?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="status" class="col-md-2 control-label">Status</label>
                                      <div class="col-md-10">
                                        <input class="form-control" type="date" id="status" name="status" value="<?php echo $comentarios['comment_status'];?>">
                                      </div>
                                      <div class="form-group">
                                      <label for="date" class="col-md-2 control-label">Date</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingrese Date" id="date" class="form-control" name="date"  value="<?php echo $comentarios['comment_date'];?>">
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