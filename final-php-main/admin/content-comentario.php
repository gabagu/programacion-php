<?php 
include('../includes/db.php');
include('../includes/functions.php');


?>

                    <h2 class="content-row-title">Listado Comentarios
                      <span>(<b>Alerta</b>: <a href="#" style="color:#3BAFDA;">Tiene una columna actulizada</a>)</span>
                    </h2>
                    
                    <div class="row">
                      <table class="table ">
                        <div class="bs-example">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Id Post</th>
                                <th>Autor</th>
                                <th>Email</th>
                                <th>Contenido</th>
                                <th>Status</th>
                                <th>Fecha</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                            <tbody>
                                 <?php
                              $comments = getCommentAdmin();  
                              foreach ($comments as $comment) {
                            ?>
                              <tr>
                                <td> </td>
                                <td><?php echo $comment['comment_post_id']; ?></td>
                                <td><?php echo $comment['comment_author']; ?></td>
                                <td><?php echo $comment['comment_email']; ?></td>
                                <td><?php echo $comment['comment_content']; ?></td>
                                <td class="mensaje" >

                                  <?php echo $comment['comment_status']; ?>

                                </td>
                                <td ><?php echo $comment['comment_date']; ?></td>
                                <td><a href="comentario-update.php?id=<?php echo $comment['comment_id']; ?>"><i class="glyphicon glyphicon-pencil" style="color:green"></i></a></td>
                                <td><a href="eliminarComentario.php?id=<?php echo $comment['comment_id']; ?>"><i class="glyphicon glyphicon-remove" style="color:red"></i></a></td>
                                </tr>
                              <?php 
                                }
                              ?>
                            </tbody>
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Id Post</th>
                                <th>Autor</th>
                                <th>Email</th>
                                <th>Contenido</th>
                                <th>Status</th>
                                <th>Fecha</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </table>
                    </div>

                    <script type="text/javascript">
                    $(function(){
                      $(".mensaje").dblclick(function(){
                        $(this).text('activada');
                        $(this).css("color","green");
                      });

                      $(".mensaje").click(function(){
                        $(this).text('desactivada');
                        $(this).css("color","red");
                        
                      });
                      
                    });
                </script>


                   
