<?php 
include('../includes/db.php');
include('../includes/functions.php');


?>

                    <h2 class="content-row-title">Listado Categorias
                      <span>(<b>Alerta</b>: <a href="#" style="color:#3BAFDA;">Tiene una columna actulizada</a>)</span>
                    </h2>
                    
                    <div class="row">
                      <table class="table ">
                        <div class="bs-example">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                            <tbody>
                                 <?php
                              $categories = getCategories();  
                              foreach ($categories as $category) {
                            ?>
                              <tr>
                                <td><?php echo $category['cat_id']; ?></td>
                                <td><?php echo $category['cat_title']; ?></td>
                                <td><a href="categoria-update.php?id=<?php echo $category['cat_id']; ?>"><i class="glyphicon glyphicon-pencil" style="color:green"></i></a></td>
                                <td><a href="eliminarCategoria.php?id=<?php echo $category['cat_id']; ?>"><i class="glyphicon glyphicon-remove" style="color:red"></i></a></td>
                                </tr>
                              <?php 
                                }
                              ?>
                            </tbody>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </table>

                      
                    </div>