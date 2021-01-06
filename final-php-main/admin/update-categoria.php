<?php 
include('../includes/db.php');
include('../includes/functions.php');
$id = $_GET['id'];
//echo $id;
$post = getSeleccionarCategoria($id);

$error = array();

//if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Sanity de los datos
  $categoria = trim($_POST['categoria']);

  // Validaciones de los campos a ingresar
  if (strlen($categoria) < 4) {
    $error['categoria'] = 'Categoria debe ser mayor a 4 caracteres';
  }

  if (empty($categoria)) {
    $error['categoria'] = 'Username no debe ser vacío';
  }

  
  if(empty($error)){
    //$id=$_POST['cat_id']; 
    $categoria = trim($_POST['categoria']);
                      
    $db->query("UPDATE categories SET cat_title = ? WHERE cat_id = ?", array($categoria, $id));
    $insertId = $db->lastInsertId();
    $db->closeConnection();

    header("Location: categoria.php");
   // $actualizarId = $db->getActualizarCategorie($id);
    //$db->closeConnection();
  }

//}

?>

                    <h2 class="content-row-title">Listado Categorias
                      <span>(<b>Alerta</b>: <a href="#" style="color:#3BAFDA;">Tiene una columna actulizada</a>)</span>
                    </h2>
                    <div class="row">
                      <table class="table ">
                        <div class="bs-example">
                        <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Categoria</h3>
              </div>
                            <div class="panel-body">


                            <div class="content-row">

                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <div class="panel-title"><b>Actualizar Categoria</b>
                                  </div>

                                  <div class="panel-options">
                                    <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
                                    <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
                                    <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
                                  </div>
                                </div>

                                <div class="panel-body">
                                  <form novalidate="" role="form" class="form-horizontal" method="post">
                                    <div class="form-group">
                                      <label for="categoria" class="col-md-2 control-label">Categoria</label>
                                      <div class="col-md-10">
                                        <input type="text" required="" placeholder="Ingresar Categoria" id="categoria" value="<?php echo $post['cat_title']; ?>" class="form-control" name="categoria">
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