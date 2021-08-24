<?php
    include("db.php");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="SELECT * FROM tareas WHERE id='$id'";
        $resultado=mysqli_query($conn,$query);
            if(mysqli_num_rows($resultado)==1){
               $row = mysqli_fetch_array($resultado);
               $Nombre= $row['Nombre'];
               $LinkD= $row['LinkD'];
               $OrdTrabajo= $row['OrdTrabajo'];
               $Altura=floatval($row['Altura']);
               $Ancho=floatval($row['Ancho']);
               $Encargado= $row['Encargado'];
               $Cliente= $row['Cliente'];
                
            }
    }

        if(isset($_POST['update'])){
            $id= $_GET['id'];
                 $Nombre= $_POST['Nombre'];
               $LinkD= $_POST['LinkD'];
               $OrdTrabajo= $_POST['OrdTrabajo'];
               $Altura=floatval($_POST['Altura']);
               $Ancho=floatval($_POST['Ancho']);
               $Encargado= $_POST['Encargado'];
               $Cliente= $_POST['Cliente'];

               $query= "UPDATE tareas set  Nombre='$Nombre', LinkD='$LinkD', OrdTrabajo='$OrdTrabajo', Altura='$Altura', Ancho='$Ancho', Encargado='$Encargado', Cliente='$Cliente' where id='$id'";
               mysqli_query($conn,$query);
               header("Location: index.php");
        }

?>

<?php include("./includes/header.php"); ?>
<div class="container p-4">
    <div class="row">
        <div class="cold-md-4 mx-auto">
             <div class="card card-body">
                 <form action="edit.php?id=<?php echo $_GET['id']?>" method="POST">
                     <div class="form-group">

                     <div class="form-group">
                                <input type="text" name="Nombre" value="<?php echo $Nombre ?>" class="form-control" placeholder="" autofocus>
                            </div> <BR>
                            <div class="form-group">
                               <input type="url" name="LinkD" value="<?php echo $LinkD ?>"  class="form-control" placeholder="" autofocus>
                            </div> <br>
                            <div class="form-group">
                                <input type="text" name="OrdTrabajo" value="<?php echo $OrdTrabajo ?>"  class="form-control" placeholder="" autofocus>
                            </div> <BR>
                            <div class="form-group">
                                <input type="text" name="Altura" value="<?php echo $Altura ?>"  class="form-control" placeholder="" autofocus>
                            </div> <BR>
                            <div class="form-group">
                                <input type="text" name="Ancho" value="<?php echo $Ancho?>"  class="form-control" placeholder="" autofocus>
                            </div> <BR>
                            <div class="form-group">
                                <input type="text" name="Encargado" value="<?php echo $Encargado?>"  class="form-control" placeholder="" autofocus>
                            </div> <BR>
                            <div class="form-group">
                                <input type="text" name="Cliente"  value="<?php echo $Cliente?>"  class="form-control" placeholder="" autofocus>
                            </div> <BR>
                            <button class="btn-success" name="update">
                                Update
                            </button>

                     </div>
                 </form>

            </div>
        </div>
    </div>
</div>
<?php include("./includes/footer.php") ?>