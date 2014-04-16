<?php 
    include('../../coneccion.php');
    $cat_nombre = $_POST["cat_nombre"];
    
   // if($n_id == ''){
//    }else{
        mysql_query("INSERT INTO categorias VALUES ('', '$cat_nombre')");
        mysql_close($con);
        //header("Location: ../proyectos/");
        echo $cat_nombre;
  //  }
?>