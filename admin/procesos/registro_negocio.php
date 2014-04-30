<?php 
    include('../../coneccion.php');
    $n_nombre = $_POST["n_nombre"];
    $n_descripcion = $_POST["n_descripcion"];
    $n_telefono = $_POST["n_telefono"];
    $n_facebook = $_POST["n_facebook"];
    $n_email = $_POST["n_email"];
    $n_ubicacion = $_POST["n_ubicacion"];
    $categoria = $_POST["categoria"];
    /*
    
    $valid_formats = array("jpg", "png", "PNG", "gif", "GIF", "JPG", "JPEG", 'jpeg');
    $max_file_size = 1024 * 6000;
    $path = "img/";
    $count = 0;
    
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	foreach ($_FILES['files']['name'] as $f => $name) {
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue;
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue;
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue;
			}
            else{
                $ext = pathinfo($_FILES['files']['name'][$f], PATHINFO_EXTENSION);
                $uniq_name = substr(uniqid(),-5) . '.' .$ext;
                $dest = $path.$uniq_name;
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], '../../'.$dest)){
                  $qry = "INSERT INTO fotopn (id_fotopn, nombre, ruta, extension, id_negocio) VALUES ('','$uniq_name','$dest','$ext','$n_nombre')" ;
                  $result = mysql_query($qry);
                  if ( false===$result ) {
                    $sql_error .= 'Error in the query '.$qry.'  Error Desc :'.mysql_error($dbc).'<br /><br />' ;
                  }
                }
            }
        }
    }
    }
    
    */
    
 
    $archivo = (isset($_FILES['foto_p'])) ? $_FILES['foto_p'] : null;
       $uniq_name=$archivo['name'];
       if ($archivo) {
          $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
          $extension = strtolower($extension);
          $extension_correcta = ($extension == 'jpg' or $extension == 'jpeg' or $extension == 'gif' or $extension == 'png');
          if($extension_correcta){
              $ruta_destino_archivo = "../../img/{$archivo['name']}";
              $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
              if($archivo_ok){
                  $qry = "INSERT INTO fotopn (id_fotopn, nombre, ruta, extension, id_negocio) VALUES ('','$uniq_name','$ruta_destino_archivo','$extension','$n_nombre')" ;
                  $result = mysql_query($qry);
                  if ( false===$result ) {
                    $sql_error .= 'Error in the query '.$qry.'  Error Desc :'.mysql_error($dbc).'<br /><br />' ;
                  }
              }
          }
       }
    
   
   // if($n_id == ''){
//    }else{
        mysql_query("INSERT INTO negocios VALUES ('', '$n_nombre', '$n_descripcion', '$n_telefono', '$n_facebook', '$n_email', '$n_ubicacion', '$categoria')");
        mysql_close($con);
        //header("Location: ../proyectos/");
  //  }
?>
