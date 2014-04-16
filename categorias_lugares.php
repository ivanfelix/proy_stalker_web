<?php include('coneccion.php'); ?>
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
                <a href="login.html">Entrar</a>
                <a href="registro.html">Registrarme</a>
            </section>
        </header>
        <section id="conp">
            
            <section id="cats">
                <h3>Categorias</h3>
                <?php
                    $result = mysql_query("SELECT * FROM categorias;");
                ?>
                <ul>
                <?php
                    while($row = mysql_fetch_assoc($result)){
                ?>
                    <li id="<?php echo $row["cat_id"] ?>"><?php echo $row["cat_nombre"]?></li>
                <?php
                }
                ?>
                </ul>
            </section>
            <section id="rigp">
                <form id="busc" action="">
                    <input id="input_list" name="input_list" list="countries"></input>
                    <datalist id="countries">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Akrotiri">Akrotiri</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Ashmore and Cartier Islands">Ashmore and Cartier Islands</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                    </datalist>
                    <input class="bota" type="button" value="env"> 
                </form>
                <section id="container">
                    
                </section>
            </section>
        </section>
        <footer>
        <ul>
            <li><a href="">Acerca de nosotros</a></li>
            <li><a href="">Aviso legal</a></li>
            <li><a href="">Contacto</a></li>
            <li><a href="">FAQ's</a></li>
            <li><a href="">Network</a></li>
            <li><a href="">Política de privacidad</a></li>
            <li><a href="">Terminos y condiciones</a></li>
            <li id="copy2"><a href="http://goo.gl/d0qlG">Stalker © 2012-2013</a></li>
        </ul>
    </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/r.js"></script>
        <script>
            var container = document.querySelector('#container');
            var msnry;
            imagesLoaded( container, function() {
              msnry = new Masonry( container,{
                  itemSelector: '.item',
              columnWidth: container.querySelector('.grid-sizer')
              })
            })
            
        </script>
        
        <script>
            
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
