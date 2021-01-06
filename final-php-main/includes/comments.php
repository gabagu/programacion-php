
<?php include('db.php');?>
<?php include('functions.php'); ?>
<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_GET['id'];
  $fechaActual = date('d-m-Y');
  //$id               = trim($_POST['user_id']);
  $comment_post_id = trim($_POST['comment_post_id']);
  $comment_author = trim($_POST['comment_author']);
  $comment_email = trim($_POST['comment_email']);
  $comment_content = trim($_POST['comment_content']);
  $comment_status = trim($_POST['desactivada']);
  $comment_date  = trim($_POST['comment_date']);
  $fecha  = trim($_POST[$fechaActual]);

// Sanity de los datos
  $usuario = trim($_POST['username']);
// Validaciones de los campos a ingresar
if (strlen($usuario) < 4) {
  $error['usuario'] = 'Categoria dehe ser mayor a 4 caracteres';
}
if (empty($usuario)) {
  $error['usuario'] = 'Username no debe ser vacío';
}
if(empty($error)){
  
  // Insertar un registro en la tabla users de la base de datos cms
  
  $db->query("INSERT INTO comments (comment_id, comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) 
  VALUES (?,?,?,?,?,?,?)", 
  array($comment_post_id, $comment_author, $comment_email, $comment_content, $comment_status, $comment_date,$fecha));
  
  $insertId = $db->lastInsertId();
  $db->closeConnection();
  header("Location: content-post.php");
  $data['success'] = "Categoria " . $usuario . " registrado con éxito";
  

}
}

?>

          <form method = "post" action="insertar-comments.php">
            <legend>Comentarios</legend>

            <fieldset>
              <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" name="autor" id="autor" class="form-control">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>

              <div class="mb-3">
                <label for="comentario" class="form-label">Comentarios</label>
                <textarea class="form-control" rows="4" name="comentario" id="comentario">
                </textarea>
              </div>
              <input type="submit" class="btn btn-primary" value="Enviar">
            </fieldset>
          </form>