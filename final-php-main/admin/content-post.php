<?php 
include('../includes/db.php');
include('../includes/functions.php');


?>

                    <h2 class="content-row-title">Listado Post
                      <span>(<b>Alerta</b>: <a href="#" style="color:#3BAFDA;">Tiene una columna actulizada</a>)</span>
                    </h2>
                    
                    <div class="row">
                      <table class="table ">
                        <div class="bs-example">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Categoria</th>
                                <th>Titulo</th>
                                <th>Autor</th>
                                <th>Usuario</th>
                                <th>Fecha</th>
                                <th>Imagen</th>
                                <th>Contenido</th>
                                <th>Tags</th>
                                <th>Contador</th>
                                <th>Status</th>
                                <th>Vistas</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                            <tbody>
                                 <?php
                              $posts = getPostsAdmin();  
                              foreach ($posts as $post) {
                            ?>
                              <tr>
                                <td> </td>
                                <td><?php echo $post['post_category_id']; ?></td>
                                <td><?php echo $post['post_title']; ?></td>
                                <td><?php echo $post['post_author']; ?></td>
                                <td><?php echo $post['post_user']; ?></td>
                                <td><?php echo $post['post_date']; ?></td>
                                <td><?php echo $post['post_image']; ?></td>
                                <td><?php echo $post['post_content']; ?></td>
                                <td><?php echo $post['post_tags']; ?></td>
                                <td><?php echo $post['post_comment_count']; ?></td>
                                <td><?php echo $post['post_status']; ?></td>
                                <td><?php echo $post['post_views_count']; ?></td>
                                <td><a href="post-update.php?id=<?php echo $post['post_id']; ?>"><i class="glyphicon glyphicon-pencil" style="color:green"></i></a></td>
                                <td><a href="eliminarPost.php?id=<?php echo $post['post_id']; ?>"><i class="glyphicon glyphicon-remove" style="color:red"></i></a></td>
                                </tr>
                              <?php 
                                }
                              ?>
                            </tbody>
                            <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Categoria</th>
                                  <th>Titulo</th>
                                  <th>Autor</th>
                                  <th>Usuario</th>
                                  <th>Fecha</th>
                                  <th>Imagen</th>
                                  <th>Contenido</th>
                                  <th>Tags</th>
                                  <th>Contador</th>
                                  <th>Status</th>
                                  <th>Vistas</th>
                                  <th>Editar</th>
                                  <th>Eliminar</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </table>

                      
                    </div>