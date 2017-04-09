<DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>DMB - CATALOGO DE SERIES Y PELICULAS</title>
      <link rel="stylesheet" href="../css/components.css">
      <link rel="stylesheet" href="../css/responsee.css">
      <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
      <!-- Personalizacion -->  
      <link rel="stylesheet" href="../css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="../js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="../js/modernizr.js"></script>
      <script type="text/javascript" src="../js/responsee.js"></script> 

      <script type="text/javascript"> 
         function eliminarBD(){ 
         confirmar=confirm("¿Seguro que quieres borrar la base de datos?"); 
         if (confirmar){
         // si pulsamos en aceptar
         alert('La Base de Datos se borrara a continuacion');
            document.location.href = "eliminarBD.php";
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
            document.location.href = "eliminarTablasBD.php";
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
                        <li><a href="index.php">Inicio</a>
                        </li>
                        <li>
                           <a>Series</a> 
                           <ul>
                              <li><a href="listado_series.php">Mis Series</a>
                              </li>
                              <li><a href="anyadir_serie.php">Añadir una serie</a>
                              </li>
                              <li><a href="formulario_modificar_series.php"> Modificar mis series</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a>Peliculas</a>          
                           <ul>
                              <li><a href="listado_peliculas.php">Mis Peliculas</a>
                              </li>
                              <li><a href="anyadir_pelicula.php">Añadir una Pelicula</a>
                              </li>
                              <li><a href="formulario_modificar_peli.php">Modificar mis peliculas</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="../index.php"><strong>DMB</strong><br/></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="../catalog.php">Catalogo</a>
                        </li>
                        <li>
                           <a>BBDD</a>          
                           <ul>
                              <li><a href="crearBD.php">Crear Base de Datos</a>
                              </li>
                              <li><a href="javascript:eliminarBD()">Borrar Base de Datos</a>
                              </li>
                              <li><a href="crearTablasBD.php">Crear una lista</a>
                              </li>
                              <li><a href="javascript:eliminarLista()">Borrar una lista</a>
                              </li>
                              <li><a href="caracteristics.php">Caracteristicas</a>
                              </li>
                           </ul>
                        </li>
                        <li><a href="../contact.php">Contacto</a>
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
            <h1>Formulario para añadir una Pelicula </h1>
          </div>
        </div>
        <div id="content">
          <div class="line">
            <div class="margin">
              <form class="myform" id="form1" name="form1" method="post" action="insertar_peliculas.php">
              <p>
                <label for="textfield">Nombre</label>
                <input type="text" name="nombre" id="nombre" />
                <label for="textarea"></label>
              </p>
              <p>
                <label for="textfield">Director</label>
                <input type="text" name="dir" id="dir" />
                <label for="textarea"></label>
              </p>
              <p>
                <label for="textfield"> Año de estreno</label>
                <input type="number" name="estreno" id="estreno" />
                <label for="textarea"></label>
              </p>
                <input name="enviar" type="submit" value="Añadir" />
              </p>
            </form>
            </div>
         </div> 
        </div>
        <div id="Layer2">
            <div id="fourth-block">
              <div class="line">
                <div id="owl-demo2" class="owl-carousel owl-theme">
                  <div class="item">
                    <h2>Asistente para Peliculas y Series</h2>
                      <p class="s-12 m-12 l-8 center">Esta pagina esta diseñada para poder administrar las series y peliculas que hayas visto y/o estes viendo, y así puedas llevar un  seguimiento de estas para no perderte ningún capitulo.
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
      <script type="text/javascript" src="../owl-carousel/owl.carousel.js"></script>   
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


</body>
</html>