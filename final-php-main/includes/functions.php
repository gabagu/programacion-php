<?php

define('DBHOST', 'localhost');
define('DBNAME', 'cms');
define('DBUSER', 'root');
define('DBPORT', 3306);
define('DBPASSWORD','root');

$db = new Database(DBHOST, DBPORT, DBNAME, DBUSER, DBPASSWORD);

function loginUser($username, $password) {
  global $db;
  $username = trim($username);
  $password = trim($password);

  $row = $db->row("SELECT * FROM users WHERE username=? ", array($username));

  if (password_verify($password, $row['user_password'])) {
      $_SESSION['username'] = $row['username'];
      $_SESSION['firstname'] = $row['user_firstname'];
      $_SESSION['lastname'] = $row['user_lastname'];
      $_SESSION['user_role'] = $row['user_role'];
      
      header("Location: /final-php-main/admin/principal.php");
  } else {
      return false;
  }
  $db->closeConnection();
  return true;
}

function loginUserAdmin($username, $password) {
  global $db;
  $username = trim($username);
  $password = trim($password);
  $user_role = 'Administrador';

  $row = $db->row("SELECT * FROM users,user_role WHERE username=? ", array($username));

  if (password_verify($password, $row['user_password'])) {
      $_SESSION['username'] = $row['username'];
      $_SESSION['firstname'] = $row['user_firstname'];
      $_SESSION['lastname'] = $row['user_lastname'];
      $_SESSION['user_role'] = $row['user_role'];
      
      header("Location: /final-php-main/admin/principal.php");
  } else {
      return false;
  }
  $db->closeConnection();
  return true;
}

function isUserLoggedIn() {
  if (isset($_SESSION['user_role'])) {
    return true;
  }
  return false;
}

function getCategories() {
  global $db;
  $categories = $db->query("SELECT cat_id, cat_title FROM categories");
  return $categories;
}

function getCommentAdmin() {
  global $db;
  $id = $db->query("SELECT comment_id,comment_post_id, comment_author, comment_email, comment_content,comment_status,comment_date
  FROM comments");
  return $id;
}


function getEstadoComentario($id) {
  global $db;
  $id = $db->query("SELECT comment_id,comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date FROM comments 
                      WHERE comment_status = ?", array($id));
  return $id;
}

function getCommentsAdmin($id) {
  global $db;
  $id = $db->query("SELECT comment_id,comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date FROM comments 
                      WHERE comment_id = ?", array($id));
  return $id;
}




function getupdateStatus($id) {
  global $db;
  $id = $db->query("UPDATE comment_status='desactivada' 
  FROM comments WHERE comment_post_id = ? and comment_status='activada'", array($id));
  return $id;
}


function getComment($id) {
  global $db;
  $id = $db->query("SELECT comment_id,comment_post_id, comment_author, comment_email, comment_content,comment_status,comment_date
  FROM comments WHERE comment_post_id = ? and comment_status='activada'", array($id));
  return $id;
}

function getUsuarios() {
  global $db;
  $usuarios = $db->query("SELECT user_id, username,user_password,user_firstname,user_lastname,user_email,user_image,user_role,randSalt,token FROM users");
  return $usuarios;
}

function getComm($id) {
  global $db;
  $id = $db->query("SELECT comment_id, comment_post_id, comment_author, comment_email, comment_content,comment_status,comment_date 
  FROM comments WHERE comment_post_id = ?", array($id));
  return $id;
}
/*
function getCommentAd($id) {
  global $db;
  $id = $db->query("SELECT comment_id = ?, comment_post_id, comment_author, comment_email, comment_content,comment_status,comment_date 
  FROM comments WHERE comment_id = ?", array($id));
  return $id;
}*/



function getCategorie($categoria) {
  global $db;
  $post = $db->row("SELECT cat_id, cat_title FROM categories 
                    WHERE cat_title = ?", array($categoria));
  return $post;
}

function getUsuario($usuarios) {
  global $db;
  $post = $db->row("SELECT username,user_password,user_firstname,user_lastname,user_email,user_image,user_role,randSalt,token FROM users 
                    WHERE user_id = ?", array($usuarios));
  return $post;
}

function getEliminarUsuario($usuarios) {
  global $db;
  $post = $db->row("DELETE  FROM users 
  WHERE 	user_id = ?", array($usuarios));
return $post;
}
function getEliminarCategorie($id) {
  global $db;
  $post = $db->row("DELETE  FROM categories 
  WHERE cat_id = ?", array($id));
return $post;
}

function getEliminarPost($id) {
  global $db;
  $post = $db->row("DELETE  FROM posts 
  WHERE 	post_id = ?", array($id));
return $post;
}

function getEliminarComentario($id) {
  global $db;
  $post = $db->row("DELETE  FROM comments 
  WHERE 	comment_id = ?", array($id));
return $post;
}

function getSeleccionarCategoria($id) {
  global $db;
  $post = $db->row("SELECT cat_id,cat_title FROM categories
                    WHERE cat_id = ?", array($id));
  return $post;
}

function getSeleccionarUsuario($id) {
  global $db;
  $post = $db->row("SELECT username, user_password, user_firstname, user_lastname, user_email, user_image,	
  user_role, randSalt, token FROM users
                    WHERE user_id = ?", array($id));
  return $post;
}

function getActualizarCategorie($id) {
  global $db;         
  $post = $db->row("UPDATE categories SET cat_title = ? WHERE cat_id = ?", array($id));
return $post;
}

function getPosts() {
  global $db;
  $posts = $db->query("SELECT post_id, post_title, post_author, post_date, post_content FROM posts");
  return $posts;
}


function getPostsAdmin() {
  global $db;
  $posts = $db->query("SELECT post_id,post_category_id, post_title, post_author, post_user, post_date, post_image, post_content, post_tags, post_comment_count, post_status, post_views_count FROM posts");
  return $posts;
}

function getPostAdmin($id) {
  global $db;
  $post = $db->row("SELECT post_id, post_category_id, post_title, post_author, post_user, post_date, post_image, post_content, post_tags, post_comment_count, post_status, post_views_count FROM posts
                    WHERE post_id = ?", array($id));
  return $post;
}

function getPost($id) {
  global $db;
  $post = $db->row("SELECT post_id, post_title, post_author, post_date, post_content FROM posts
                    WHERE post_id = ?", array($id));
  return $post;
}




/*
function getPostAdmin($id) {
  global $db;
  $post = $db->row("SELECT post_category_id, post_title, post_author, post_user, post_date, post_image, post_content, post_tags, post_comment_count, post_status, post_views_count FROM posts", array($id));
  return $post;
}*/

function getPostsBySearch($search) {
  global $db;
  $posts = $db->query("SELECT post_id, post_title, post_author, post_date, post_content FROM posts
                      WHERE post_content LIKE ?", array($search));
  return $posts;
}


?>