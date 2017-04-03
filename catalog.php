<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>DMB - CATALOGO DE SERIES Y PELICULAS</title>
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
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]--> 
   </head>
   <body class="size-1140">
      <!-- Barra de Navegacion -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a><br /><strong></strong></a>
                  </div>                  
                  <p class="nav-text"></p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="../AppWebBBDD/index.php">Inicio</a>
                        </li>
                        <li>
                           <a>Series</a>          
                           <ul>
                              <li><a href="bbdd/listado_series.php">Mis Series</a>
                              </li>
                              <li><a href="bbdd/anyadir_serie.php">Añadir una serie</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a>Peliculas</a>          
                           <ul>
                              <li><a>Mis Peliculas</a>
                              </li>
                              <li><a href="bbdd/anyadir_pelicula.php">Añadir una Pelicula</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="../AppWebBBDD/index.php"><strong>DMB</strong><br/></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="../AppWebBBDD/catalog.php">Catalogo</a>
                        </li>
                        <li>
                           <a>BBDD</a>			    
                           <ul>
                              <li><a href="bbdd/crearBD.php">Crear Base de Datos</a>
                              </li>
                              <li><a href="bbdd/eliminarBD.php">Borrar Base de Datos</a>
                              </li>
                              <li><a href="bbdd/crearTablasBD.php">Crear una lista</a>
                              </li>
                              <li><a href="bbdd/eliminarTablasBD.php">Borrar una lista</a>
                              </li>
                              <li><a href="caracteristics.php">Caracteristicas</a>
                              </li>
                           </ul>
                        </li>
                        <li><a href="contact.php">Contacto</a>
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
               <h1>Catalogo Interactivo</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">
                   <div class="s-12 m-6 l-4">
                      <img src="img/Breaking-Bad.jpg" alt="alternative text">    
                     <p class="subtitile">Galardona serie que cuenta la entrada al mundo de las drogas de Walter White.
                     </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="img/Death-Note.jpg" alt="alternative text">      
                     <p class="subtitile">Anime que se basa en un cuaderno que causa la muerte de la persona cuyo nombre se escribe en el.
                     </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="img/Santa-Clarita-Diet.jpg" alt="alternative text">      
                     <p class="subtitile">Historia sobre una familia cuya madre necesita comer cuerpos humanos.
                     </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                       <img src="img/Stranger-Things.jpg" alt="alternative text">      
                     <p class="subtitile">Cuenta la desaparición de Will Myers en esta serie sobre extraños sucesos.
                     </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="img/Dr-House.jpg">      
                      <p class="subtitile">Serie que sigue los casos que trata el excentrico Dr. House.
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="img/v-de-vendetta.jpg">  
                      <p class="subtitile">Narra la historia de V, quien quiere completar la tarea de Guy Fawkes de destruir el parlamento.
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="img/Narcos.jpg">      
                      <p class="subtitile">Serie original de Netflix que trata el ascenso y caida del famoso narcotraficante colombiano Pablo Escobar.
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="img/John-Wick.jpg">      
                      <p class="subtitile">Pelicula sobre un ex-sicario profesional que vuelve al trabajo cuando, al morir su mujer, unos gangsters rusos matan a su perro y le roban el coche.
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
                     </p>
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