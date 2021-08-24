<?php

    include('db.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM tareas WHERE id ='$id'";
        $resultado=mysqli_query($conn,$query);    
    }
    
    header("Location: index.php");

?>