<?php
    include('db.php');
    if(isset($_POST['save_task'])){
        $Nombre=$_POST['Nombre'];
        $LinkD=$_POST['LinkD'];
        $OrdTrabajo=$_POST['OrdTrabajo'];
        $Altura=floatval($_POST['Altura']);
        $Ancho=floatval($_POST['Ancho']);
        $Encargado=$_POST['Encargado'];
        $Cliente=$_POST['Cliente'];

        $query= "INSERT INTO tareas(Nombre,LinkD,OrdTrabajo,Altura,Ancho,Encargado,Cliente)VALUES('$Nombre', '$LinkD', '$OrdTrabajo', '$Altura', '$Ancho', '$Encargado', '$Cliente')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die('falla');
        }
        $_SESSION['message']="Tarea Guardada";
        $_SESSION['message_type']= 'success';
        header("Location: index.php");
        
      
    }
?>