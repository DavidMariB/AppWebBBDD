<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>DMB - CARACTERISTICAS DE LA WEB</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- Personalizacion -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>

      <script type="text/javascript"> 
         function eliminarBD(){ 
         confirmar=confirm("¿Seguro que quieres borrar la base de datos?"); 
         if (confirmar){
         // si pulsamos en aceptar
         alert('La Base de Datos se borrara a continuacion');
            document.location.href = "bbdd/eliminarBD.php";
         }else {
         // si pulsamos en cancelar
         alert('La Base de Datos no se borrara');
            return false;
         } 
         } 
      </script>

      <script type="text/javascript"> 
         function eliminarLista(){ 
         confirmar=confirm("¿Seguro que quieres borrar tu lista?"); 
         if (confirmar){
         // si pulsamos en aceptar
         alert('La Lista se borrara a continuacion');
            document.location.href = "bbdd/eliminarTablasBD.php";
         }else {
         // si pulsamos en cancelar
         alert('La Lista no se borrara');
            return false;
         } 
         } 
      </script>

      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- Barra de navegacion -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a><br/><strong></strong></a>
                  </div>                  
                  <p class="nav-text"></p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.php">Inicio</a>
                        </li>
                        <li>
                           <a>Series</a>          
                           <ul>
                              <li><a href="bbdd/listado_peliculas.php">Mis Series</a>
                              </li>
                              <li><a href="bbdd/anyadir_serie.php">Añadir una serie</a>
                              </li>
                              <li><a href="bbdd/formulario_modificar_series.php"> Modificar mis series</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a>Peliculas</a>          
                           <ul>
                              <li><a href="bbdd/listado_peliculas.php">Mis Peliculas</a>
                              </li>
                              <li><a href="bbdd/anyadir_pelicula.php">Añadir una Pelicula</a>
                              </li>
                              <li><a href="bbdd/formulario_modificar_peli.php">Modificar mis peliculas</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="index.php"><strong>DMB</strong> <br/></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a>Catalogo</a>
                        </li>
                        <li>
                           <a>BBDD</a>			    
                           <ul>
                              <li><a href="bbdd/crearBD.php">Crear Base de Datos</a>
                              </li>
                              <li><a href="javascript:eliminarBD()">Borrar Base de Datos</a>
                              </li>
                              <li><a href="bbdd/crearTablasBD.php">Crear una Lista</a>
                              </li>
                              <li><a href="javascript:eliminarBD()">Borrar una Lista</a>
                              </li>
                              <li><a href="caracteristics.php">Caracteristicas</a>
                              </li>
                           </ul>
                        </li>
                        <li><a href="contact.php">CONTACTO</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <div id="head">
            <div class="line">
               <h1>Pagina web basada en responsive</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-paperplane_ico icon2x"></i>
                        <h3>Ligera</h3>
                        <p>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-display_screen icon2x"></i>
                        <h3>Responsive</h3>
                        <p>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-heart icon2x"></i>
                        <h3>Intuitiva</h3>
                        <p>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-attachment icon2x"></i>
                        <h3>Util</h3>
                        <p>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-reorder icon2x"></i>
                        <h3>Navegacion Responsive</h3>
                        <p>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-mail icon2x"></i>
                        <h3>Componentes Responsive</h3>
                        <p>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- GALLERY -->	
         <div id="third-block">
            <div class="line">
               <h2>Catalogo Responsive</h2>
               <p class="subtitile">Para una mayor comodidad al seleccionar tus series y peliculas.
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="img/Breaking-Bad.jpg">      
                     <p class="subtitile">Galardona serie que cuenta la entrada al mundo de las drogas de Walter White.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/Death-Note.jpg">      
                     <p class="subtitile">Anime que se basa en un cuaderno que causa la muerte de la persona cuyo nombre se escribe en el.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/Santa-Clarita-Diet.jpg">      
                     <p class="subtitile">Historia sobre una familia cuya madre necesita comer cuerpos humanos.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/Stranger-Things.jpg">      
                     <p class="subtitile">Cuenta la desaparición de Will Myers en esta serie sobre extraños sucesos.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div id="fourth-block">
            <div class="line">
               <div id="owl-demo2" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Asistente para Peliculas y Series</h2>
                     <p class="s-12 m-12 l-8 center">Esta pagina esta diseñada para poder administrar las series y peliculas que hayas visto y/o estes viendo, y así puedas llevar un seguimiento de estas
                     para no perderte ningún capitulo.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Contenido Legal</h2>
                     <p class="s-12 m-12 l-8 center">Esta pagina tan solo realiza un seguimiento de las Series y Peliculas que tu indiques, pero no incluye ningún link a ninguna pagina eterna o archivo e video para visualizar este contenido de manera ilegal.
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2017, DecDam - DMB Asistente Peliculas & Series
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Diseñado mediante Responsive Framework</a>
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : false,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : true,
         	singleItem:true
           });
         });	
          
      </script> 
   </body>
</html>