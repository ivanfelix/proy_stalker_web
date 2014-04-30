<?php
    
    
    if(is_readable('DbConnection.php')){
        require 'DbConnection.php';
    }else{
        throw new RuntimeException('No se incluyo la ${library}');
    }

    $db = new DbConnection('localhost','ivan','sC3ucbNcC3yFynFR','stalker');
    $db->connect();
    //$data = array();
        $data = $db->getAllRows("SELECT * FROM negocios WHERE categoria LIKE '%".$_POST['query']."%' ");

        switch (@$_REQUEST['action']) {
        
            case "consultar":
                
                $dive='';
                foreach($data as $i){
                    $dive .= "<div><img src=img/showcase-50_med.jpeg><a href=vista_negocio.php?negocioId=".$i['n_id'].">". $i['n_nombre'] ."</a></div>";
                }
                echo json_encode($dive);
            exit;
        }




       $db->disconnect();
    
    
    /*header('Content-Type: application/json');
    include('coneccion.php');
    $recibe = $_POST["str"];
    $result = mysql_query("SELECT * FROM negocios WHERE n_id = '$recibe';");
    $todos = array("Negocios" => array());
    
    while($row = mysql_fetch_array($result)){
        $negocios = array();
        $negocios["n_id"] = $row['n_id'];
        $negocios["n_nombre"] = $row['n_nombre'];
        
        array_push($todos["Negocios"], $negocios);
    }
    echo json_encode($todos);*/
?> 

