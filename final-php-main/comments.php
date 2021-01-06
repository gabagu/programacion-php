<?php 
if(isset($_POST['submit'])){
  $id = $_GET['id'];
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  
  $comment_post_id = $id;
  $comment_author = trim($_POST['autor']);
  $comment_email = trim($_POST['email']);
  $comment_content = trim($_POST['comentario']);
  $comment_status = 'deactivada';
  echo $fechaActual = date('Y-m-d');
  $comment_date  = $fechaActual;
// Sanity de los datos
  $usuario = trim($_POST['autor']);
// Validaciones de los campos a ingresar
if (strlen($usuario) < 4) {
  $error['usuario'] = 'Categoria dehe ser mayor a 4 caracteres';
}
if (empty($usuario)) {
  $error['usuario'] = 'Username no debe ser vacío';
}
if(empty($error)){
  // Insertar un registro en la tabla users de la base de datos cms
  $db->query("INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) 
  VALUES (?,?,?,?,?,?)", 
  array($comment_post_id, $comment_author, $comment_email, $comment_content, $comment_status, $comment_date));
  
  $insertId = $db->lastInsertId();
  $db->closeConnection();
  header("Location: index.php");
  $data['success'] = "Categoria " . $usuario . " registrado con éxito";
}
}
?>

<form class="form-comments" method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
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
              <input type="submit" class="btn btn-primary" value="Enviar" name="submit">
            </fieldset>
          </form>