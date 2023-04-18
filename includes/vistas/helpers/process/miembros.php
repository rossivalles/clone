<?php
require_once 'includes/config.php';

$tituloPagina = 'Miembros';

$contenidoPrincipal=<<<EOS

<h1> Miembros </h1>
<ul>
<li><a href= "#pablo"> Pablo Ferrando Galán </a></li>
<li><a href= "#daniel"> Daniel Gallego Badía </a></li>
<li><a href= "#felipe"> Felipe Ye Chen </a></li>
<li><a href= "#rossina"> Rossina Vallés </a></li>
<li><a href= "#ivan"> Iván Gayo Navarro </a></li>
</ul>

<h1> Planificación </h1>
<li><a href= "#planificacion"> Planificacion </a></li>


<br><br>

<h2><a name = "pablo">PABLO FERRANDO GALÁN </a></h2>
<img src = "img/miembro_pfg.jpg" width="100" height="100">
<p>Correo: paferr04@ucm.es</p>
<p> Estudiante de ingenieria informatica en la universidad Complutense de Madrid. Edad 20 años y residente en Madrid.
Deportista élite y de Alto Nivel de orientación. Apasionado de las montañas. 
</p>
<br><br>

<h2><a name = "daniel">DANIEL GALLEGO BADÍA</a></h2>
<img src = "" width="100" height="100">
<p>Correo: dangal04@ucm.es</p>
<p> Estudiante de ingenieria informatica en la universidad Complutense de Madrid. Edad 20 años, nacido el 13 de abril de 2002 en Madrid, España.
  Actualmente juega al rugby en Ammonites Segovia, en su tiempo libre le gusta ver series, jugar a juegos y salir con amigos.</p>
<br><br>

<h2><a name = "felipe">FELIPE YE CHEN</a></h2>
<img src = "img/miembro_felipe.jpg" width="100" height="100">
<p>Correo: felipeye@ucm.es</p>
<p> Estudiante de ingenieria informatica de la universidad Complutense de madrd, 21 años, que dedica su tiempo libre a los videojuegos</p>
<br><br>

<h2><a name = "rossina">ROSSINA VALLÉS</a></h2>
<img src = "miembro_rossina.jpg" width="100" height="100">
<p>Correo: rossinav@ucm.es</p>
<p> Estudiante de ingenieria informatica, realizando la materia aplicaciones web como estudiante visitante en la Universidad Complutense de Madrid. Edad 22 años, nacida el 24 de Setiembre de 2000 en Montevideo, Uruguay.
  En su tiempo libre le gusta hacer deporte y conocer. Actualmente juega al balonmano en GMadrid. </p>
<br><br>

<h2><a name = "ivan">IVÁN GAYO NAVARRO </a></h2>
<img src = "img/miembro_ivan.jpg" width="100" height="100">
<p>Correo: </p>
<p> Estudiante de ingenieria informatica en la universidad Complutense de Madrid.
</p>
<br><br>

<h2><a name = "planificacion">PLANIFICACIÓN </a></h2>
<object data="img/AW_Planificacion_Gantt.pdf" height="500" width="800"></object>

<br><br>

EOS;

require 'includes/vistas/comun/layout.php';