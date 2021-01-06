
<?php include('db.php');?>
<?php include('functions.php'); ?>
<?php


//$valor_Actual = $GET['id'];
  //$id = $_GET['id'];


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  
  $comment_post_id = $valor_Actual;
  $comment_author = trim($_POST['autor']);
  $comment_email = trim($_POST['email']);
  $comment_content = trim($_POST['comentario']);
  $comment_status = 'activada';
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
  header("Location: content-post.php");
  $data['success'] = "Categoria " . $usuario . " registrado con éxito";
}
}