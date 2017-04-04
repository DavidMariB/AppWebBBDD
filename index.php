<!--David Marí Beltrán-->
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>DMB - ASISTENTE PARA ADMINISTRAR SUS PELICULAS Y SERIES</title>
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

      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- Barra Superior -->
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                   <br /><strong></strong></a>
                  </div>                  
                  <p class="nav-text"></p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.php">INICIO</a>
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
                        <a href="index.php"><strong>DMB</strong><br/></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="catalog.php">Catalogo</a>
                        </li>
                        <li>
                           <a>BBDD</a>			    
                           <ul>
                              <li><a href="bbdd/crearBD.php">Crear Base de Datos</a>
                              </li>
                              <li><a href="javascript:eliminarBD()">Borrar Base de Datos</a>
                              </li>
                              <li><a href="bbdd/crearTablasBD.php">Crear una lista</a>
                              </li>
                              <li><a href="bbdd/eliminarTablasBD.php"> Eliminar una lista </a>
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
         <!-- CAROUSEL (ESTO HACE QUE LA PAGINA PRINCIPAL PUEDA TENER LAS IMAGENES QUE SE MUEVEN) -->  	
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="img/Breaking-Bad.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>Pagina construida bajo Responsive framework</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Hecha para la asignatura de BBDD.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/Stranger-Things.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>Catalogo: Proximamente</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Donde podras añadir series y peliculas a tu lista con un simple click.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/Santa-Clarita-Diet.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>Base de Datos alojada en AWS (Proximamente)</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Para tener una conectividad funcional y rapida.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Primer Bloque --> 	
         <div id="first-block">
            <div class="line">
               <h2>Sobre esta Pagina</h2>
               <p class="subtitile">
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-paperplane_ico icon2x"></i>
                     <h3>Acerca de</h3>
                     <p>Esta pagina esta construida mediante responsive, y esta realizada para la aignatura de BBDD.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-star icon2x"></i>
                     <h3>Compañía</h3>
                     <p>Esta pagina está realizada por David Marí, alumno de 1º de DAM en Florida Universitaria.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-message icon2x"></i>
                     <h3>Servicios</h3>
                     <p>El objetivo de esta pagina es poder tener una organización diferente a las que ya hay.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-mail icon2x"></i>
                     <h3>Contacto</h3>
                     <p>Puedes ponerte en contacto para realizar sugerencias y/o reportar bugs que hayan en la pagina mediante 
                        la pagina de contacto a la cual se accede mediante el menu superior.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Segundo Bloque --> 	
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                        <h1></h1>
                        <p class="margin-bottom">
                        </p>			
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <!-- Galeria --> 	
         <div id="third-block">
            <div class="line">
               <h2>Catalogo Responsive</h2>
               <p class="subtitile">Para una mayor comodidad al seleccionar tus series y peliculas.
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="img/Breaking-Bad.jpg" alt="alternative text">      
                     <p class="subtitile">Galardona serie que cuenta la entrada al mundo de las drogas de Walter White.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/Death-Note.jpg" alt="alternative text">      
                     <p class="subtitile">Anime que se basa en un cuaderno que causa la muerte de la persona cuyo nombre se escribe en el.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/Santa-Clarita-Diet.jpg" alt="alternative text">      
                     <p class="subtitile">Historia sobre una familia cuya madre necesita comer cuerpos humanos.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/Stranger-Things.jpg" alt="alternative text">      
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