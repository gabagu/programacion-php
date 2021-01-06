<?php 
include('../includes/db.php');
include('../includes/functions.php');
$id = $_GET['id'];
//echo $id;
$postAdmin = getPostAdmin($id);
//var_dump($postAdmin);
$error = array();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Sanity de los datos
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
  // Validaciones de los campos a ingresar
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
  }
}
?>
                    <h2 class="content-row-title">Listado Post
                      <span>(<b>Alerta</b>: <a href="#" style="color:#3BAFDA;">Tiene una columna actulizada</a>)</span>
                    </h2>
                    <div class="row">
                      <table class="table ">
                        <div class="bs-example">
                        <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Post</h3>
              </div>
                            <div class="panel-body">


                            <div class="content-row">

                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <div class="panel-title"><b>Actualizar Post</b>
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
                                      <label for="categoria" class="col-md-2 control-label">Categoria</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Categoria" id="categoria" class="form-control" name="categoria" value="<?php echo $postAdmin['post_category_id']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="titulo" class="col-md-2 control-label">Titulo</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Titulo" id="titulo" class="form-control" name="titulo" value="<?php echo $postAdmin['post_title']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="autor" class="col-md-2 control-label">Autor</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Autor" id="autor" class="form-control" name="autor" value="<?php echo $postAdmin['post_author']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="usuario" class="col-md-2 control-label">Usuario</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Usuario" id="usuario" class="form-control" name="usuario" value="<?php echo $postAdmin['post_user']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="fecha" class="col-md-2 control-label">Fecha</label>
                                      <div class="col-md-10">
                                        <input class="form-control" type="date" id="fecha" name="fecha" value="<?php echo $postAdmin['post_date']; ?>">
                                      </div>
                                      <div class="form-group">
                                      <label for="imagen" class="col-md-2 control-label">Imagen</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingrese Imagen" id="imagen" class="form-control" name="imagen"  value="<?php echo $postAdmin['post_image']; ?>">
                                      </div>
                                    </div>
                                      <div class="form-group">
                                      <label for="contenido" class="col-md-2 control-label">Contenido</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingrese Contenido" id="contenido" class="form-control" name="contenido"  value="<?php echo $postAdmin['post_content']; ?>">
                                      </div>
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="tags" class="col-md-2 control-label">Tags</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Tags" id="tags" class="form-control" name="tags"  value="<?php echo $postAdmin['post_tags']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="contador" class="col-md-2 control-label">Contador</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Contador" id="contador" class="form-control" name="contador"  value="<?php echo $postAdmin['post_comment_count']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="status" class="col-md-2 control-label">Status</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Status" id="status" class="form-control" name="status"  value="<?php echo $postAdmin['post_status']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="vistas" class="col-md-2 control-label">Vistas</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Vistas" id="vistas" class="form-control" name="vistas"  value="<?php echo $postAdmin['post_views_count']; ?>">
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