<?php 
    include('../../coneccion.php');
    $n_nombre = $_POST["n_nombre"];
    $n_descripcion = $_POST["n_descripcion"];
    $n_telefono = $_POST["n_telefono"];
    $n_facebook = $_POST["n_facebook"];
    $n_email = $_POST["n_email"];
    $n_ubicacion = $_POST["n_ubicacion"];
    $categoria = $_POST["categoria"];
    
   // if($n_id == ''){
//    }else{
        mysql_query("INSERT INTO negocios VALUES ('', '$n_nombre', '$n_descripcion', '$n_telefono', '$n_facebook', '$n_email', '$n_ubicacion', '$categoria')");
        mysql_close($con);
        //header("Location: ../proyectos/");
  //  }
?>