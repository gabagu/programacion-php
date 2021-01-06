<?php 
include('../includes/db.php');
include('../includes/functions.php');



?>

                    <h2 class="content-row-title">Listado Usuarios
                      <span>(<b>Alerta</b>: <a href="#" style="color:#3BAFDA;">Tiene una columna actulizada</a>)</span>
                    </h2>
                    
                    <div class="row">
                      <table class="table ">
                        <div class="bs-example">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Imagen</th>
                                <th>Rol</th>
                                <th>RandSalt</th>
                                <th>Token</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                            <tbody>
                                 <?php
                              $usuarios = getUsuarios();  
                              foreach ($usuarios as $usuario) {
                            ?>
                              <tr>
                                <td> </td>
                                <td><?php echo $usuario['username']; ?></td>
                                <td><?php echo $usuario['user_firstname']; ?></td>
                                <td><?php echo $usuario['user_lastname']; ?></td>
                                <td><?php echo $usuario['user_email']; ?></td>
                                <td><?php echo $usuario['user_image']; ?></td>
                                <td><?php echo $usuario['user_role']; ?></td>
                                <td><?php echo $usuario['randSalt']; ?></td>
                                <td><?php echo $usuario['token']; ?></td>
                                <td><a href="usuario-update.php?id=<?php echo $usuario['user_id']; ?>"><i class="glyphicon glyphicon-pencil" style="color:green"></i></a></td>
                                <td><a href="eliminarUsuario.php?id=<?php echo $usuario['user_id']; ?>"><i class="glyphicon glyphicon-remove" style="color:red"></i></a></td>
                                </tr>
                              <?php 
                                }
                              ?>
                            </tbody>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Imagen</th>
                                <th>Rol</th>
                                <th>RandSalt</th>
                                <th>Token</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </table>

                      
                    </div>