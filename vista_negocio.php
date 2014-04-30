<?php
include('coneccion.php');
$id_neg = $_GET["negocioId"];
$query = mysql_query("SELECT * FROM negocios WHERE n_id = $id_neg");
while($row=mysql_fetch_assoc($query)){
?>
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
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">Estas usando un navegador <strong>obsoleto!!!</strong>. Te recomendamos <a href="http://browsehappy.com/">actualizar tu navegador</a> para una mejor experiencia &nbsp; :)</p>
        <![endif]-->

        <header>
            <div id="lo">
                <a href="/"><img src="img/logo.png"></a>
            </div>
            <section id="log">
                <a href="login.html">log</a>
                <a href="registro.html">reg</a>
            </section>
        </header>
        <section id="conp">
           <section id="infonegocio">
               <section id="lep">
                   <div id="pp">
                       <img src="img/775761672_5c275ae961_o.jpg">
                   </div>
                   <h1><?php echo $row["n_nombre"]; ?></h1>
                   <span><a href="">Enviar un mensaje</a></span>
                  
               </section>
               <section id="banr">
                   <div id="rank">
                       <div id="lov">♥<span>0</span></div>
                   </div>
               </section>
               <section id="allinf">
                   <p><?php echo $row["n_descripcion"]; ?></p>
                   <ul>
                       <li><a href="">Telefono: <?php echo $row["n_tel"]; ?></a></li>
                       <li><a href="">Email: <?php echo $row["n_email"]; ?></a></li>
                       <li><a target="blank" href="http://facebook.com/<?php echo $row["n_facebook"]; ?>">Facebook: /<?php echo $row["n_facebook"]; ?></a></li>
                   </ul>
               </section>
           </section> 
           <section id="gpw">
               <section id="gal">
                   <a class="bota" id="sal" href="">Galería</a>
                   <div>
                       <a href=""><img src="img/775761672_5c275ae961_o.jpg"></a>
                   </div>
                    <div>
                       <a href=""><img src="img/775761672_5c275ae961_o.jpg"></a>
                   </div>
                   <div>
                       <a href=""><img src="img/775761672_5c275ae961_o.jpg"></a>
                   </div>
                    <div>
                       <a href=""><img src="img/775761672_5c275ae961_o.jpg"></a>
                   </div>
                   <div>
                       <a href=""><img src="img/775761672_5c275ae961_o.jpg"></a>
                   </div>
                    <div>
                       <a href=""><img src="img/775761672_5c275ae961_o.jpg"></a>
                   </div>
               </section>
               <section id="prom">
                   <div>
                       <h3>Promociones</h3>
                       <p>Primeros 250 likes entran a el ‪#‎sorteo‬ de 5 globos de cantoya! #‎cortesía‬ de Globos Cantoya saltillo CONTACTO 844 197 6640</p>
                       <a href="">link</a>
                   </div>
                   <div>
                       <h3>no</h3>
                       <p></p>
                   </div>
               </section>
           </section>
           <section id="abajo">
               <section id="mapa">
                    <?php echo $row["n_mapa"]; ?>
               </section>
               <section id="mensajes">
                   <section id="msjp">
                       <h3><a href="">Ivan Felix</a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, nam, veritatis beatae accusantium veniam nemo dolores possimus labore dolore eveniet exercitationem maxime delectus autem omnis sit similique magnam dignissimos odit.</p>
                       <div class="bota">Responder</div>
                       <section class="reply">
                           <h3><span>Respuesta</span> <a href="">Juan Lopez</a></h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, suscipit, tempora, pariatur assumenda magnam ipsa expedita qui ratione aspernatur iusto corporis architecto obcaecati veritatis et in eligendi nesciunt numquam necessitatibus!</p>
                       </section>
                        <section class="reply">
                           <h3><span>Reply</span> <a href="">usr2</a></h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, suscipit, tempora, pariatur assumenda magnam ipsa expedita qui ratione aspernatur iusto corporis architecto obcaecati veritatis et in eligendi nesciunt numquam necessitatibus!</p>
                       </section>
                    </section>
                    <section id="msjp">
                       <h3><a href="">Usr</a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, nam, veritatis beatae accusantium veniam nemo dolores possimus labore dolore eveniet exercitationem maxime delectus autem omnis sit similique magnam dignissimos odit.</p>
                       <div class="bota">Responder</div>
                   </section>
               </section>
            </section>
        </section>
<?php
  }
?>
<footer><a href="contact.html">conta </a><a href="bepart.html"> contr</a></footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

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
