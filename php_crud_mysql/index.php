<?php include("db.php"); ?>
<?php include("./includes/header.php"); ?>

    
    <div class="container p-4">

        <div class="row">

            <div class="col-md-16">
                
                
                <div class="card">
                    <div class="card-body">
                       <form action="save_task.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="Nombre" class="form-control" placeholder="Nombre de la tarea " autofocus>
                            </div> <BR>
                            <div class="form-group">
                               <input type="url" name="LinkD" class="form-control" placeholder="URL DE DESCARGA" autofocus>
                            </div> <br>
                            <div class="form-group">
                                <input type="text" name="OrdTrabajo" class="form-control" placeholder="URL DE ORDEN DE TRABAJO " autofocus>
                            </div> <BR>
                            <div class="form-group">
                                <input type="text" name="Altura" class="form-control" placeholder="Altura del Diseño" autofocus>
                            </div> <BR>
                            <div class="form-group">
                                <input type="text" name="Ancho" class="form-control" placeholder="Ancho del Diseño" autofocus>
                            </div> <BR>
                            <div class="form-group">
                                <input type="text" name="Encargado" class="form-control" placeholder="Responsable del diseño" autofocus>
                            </div> <BR>
                            <div class="form-group">
                                <input type="text" name="Cliente" class="form-control" placeholder="Cliente" autofocus>
                            </div> <BR>

                            <input type="submit" class="btn btn-success btn-block" name="save_task" Value="Enviar">
                      </form>
                    </div>
                </div>
            </div>

        </div> 
        <br>
        <br>

                     <div class="container p-4">

                        <div class="row">
                                <div class="col-md-28">
                                        <table class= "table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tarea</th>
                                                    <th>url</th>
                                                    <th>orden de trabajo</th>
                                                    <th>altura</th>
                                                    <th>ancho</th>
                                                    <th>Responsable</th>
                                                    <th>cliente</th>
                                                    <th>acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query= "SELECT * FROM tareas";
                                                $resultados_tareas=mysqli_query($conn,$query);
                                                while($row = mysqli_fetch_array($resultados_tareas)){?>

                                                        <tr>
                                                            <td><?php echo $row['Nombre'] ?></td>
                                                            <td><a href="<?php echo $row['LinkD'] ?>" class="btn btn-secondary"  target="_blank" > <i class="fas fa-file-download"></i></a></td>
                                                            <td><a href="<?php echo $row['OrdTrabajo'] ?>" target="_blank">Enlace </a></td>
                                                            <td><?php echo $row['Altura'] ?></td>
                                                            <td><?php echo $row['Ancho'] ?></td>
                                                            <td><?php echo $row['Encargado'] ?></td>
                                                            <td><?php echo $row['Cliente'] ?></td>
                                                            <td>
                                                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                                                    <i class="fas fa-marker"></i>
                                                                </a>
                                                                <a href="dalete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        
                                                        

                                                <?php } ?>
                                            </tbody>
                                        </table>

                                    </div>

                            </div>

                            </div>
                        </div>








   
    <?php include("./includes/footer.php"); ?>


