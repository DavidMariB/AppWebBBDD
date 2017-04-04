<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>DMB - PAGINA DE CONTACTO</title>
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
      <!-- Barar de Navegacion -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="../design/"> <br /><strong></strong></a>
                  </div>                  
                  <p class="nav-text"></p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="../AppWebBBDD/index.php">INICIO</a>
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
                              <li><a href="bbdd/listado_peliculas.php">Mis Peliculas</a>
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
                              <li><a href="javascript:eliminarBD()">Borrar Base de Datos</a>
                              </li>
                              <li><a href="bbdd/crearTablasBD.php">Crear una Lista</a>
                              </li>
                              <li><a href="bbdd/eliminarTablasBD.php">Borrar una Lista</a>
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
               <h1>PÁGINA DE CONTACTO</h1>
            </div>
         </div>
         <div id="content" class="left-align contact-page">
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-6">
                     <h2>Detalles de Contacto</h2>
                     <address>
                        <p><i class="icon-home icon"></i> Florida Universitaria, Catarroja</p>
                        <p><i class="icon-globe_black icon"></i> Valencia - España</p>
                        <p><i class="icon-mail icon"></i> decdam@mail.com</p>
                     </address>
                     <br />
                     <h2>Redes Sociales</h2>
                     <p><i class="icon-facebook icon"></i> DecDam</a></p>
                     <p><i class="icon-twitter icon"></i> @DecDam</a></p>
                  </div>
                  <div class="s-12 l-6">
                     <h2>Formulario de contacto (no funcional)</h2>
                     <form class="customform" action="">
                        <div class="s-12 l-7"><input name="" placeholder="Correo" title="Your e-mail" type="text" /></div>
                        <div class="s-12 l-7"><input name="" placeholder="Nombre" title="Your name" type="text" /></div>
                        <div class="s-12"><textarea placeholder="Mensaje" name="" rows="5"></textarea></div>
                        <div class="s-12 m-6 l-4"><button type="submit">Enviar</button></div>
                     </form>
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