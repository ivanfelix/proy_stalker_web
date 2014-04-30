<?php include('../../coneccion.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link type="text/plain" rel="author" href="humans.txt">
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../../css/main.css">
        <script src="../../js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">Estas usando un navegador <strong>obsoleto!!!</strong>. Te recomendamos <a href="http://browsehappy.com/">actualizar tu navegador</a> para una mejor experiencia &nbsp; :)</p>
        <![endif]-->

        <header>
            <div id="lo">
                <a href="/"><img src="../../img/logo.png"></a>
            </div>
            <section id="log">
                <a href="login.html">Salir</a>
            </section>
        </header>
        <section id="conp">
            <form id="registro_negocio" enctype="multipart/form-data">
                <label>Nombre del lugar</label>
                <input id="n_nombre" name="n_nombre" type="text">
                <label>Foto principal</label>
                <input id="foto_p" type="file" name="foto_p">
                <label>Teléfono</label>
                <input id="n_telefono" name="n_telefono" type="text">
                <label>Email</label>
                <input id="n_email" name="n_email" type="text">
                <label>Facebook</label>
                <input id="n_facebook" name="n_facebook" type="text">
                <label>Descripción</label>
                <textarea name="n_descripcion" id="n_descripcion"></textarea>
                <label>Ubicación</label>
                <input id="n_ubicacion" name="n_ubicacion" type="text">
                <label>Categoria</label>
                <select id="categoria" name="categoria">
                    <option value="Seleccionar">Seleccionar</option>
                    <?php
                        $result = mysql_query("SELECT * FROM categorias;");
                        while($row = mysql_fetch_assoc($result)){
                            echo "<option value=".$row["cat_id"]." >".$row["cat_nombre"]."</option>";
                        }
                    ?>
                </select>
                <input id="reg_prod" class="bota" type="button" value="Publicar">
            </form>
            <section id="alerta">
                <div id="ok">El Negocio fue registrado correctamente.</div>
                <div id="error">Falló el registro intente más tarde.</div>
            </section>
        </section>
<footer><a href="contact.html">conta </a><a href="bepart.html"> contr</a></footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/main.js"></script>
<script>
    $(window).ready(function(){
        $('#reg_prod').click(function(){
            $.post("../procesos/registro_negocio.php", $('#registro_negocio').serialize(), function(response){
                if(response){
                    alert(response)
                }else{
                    alert(response)
                }
            })
        })
    })
</script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
