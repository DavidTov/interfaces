<?php

function rolDeJuegos()
{
  echo "Desliza cualquera de los cuadros de colores para rolar un partido."."<br>".
        "En la parte superior derecha del calendario puedes seleccionar mes, año o día para especificar también la hora."."<br>".
        "Al deslizar un cuadro al calendario le das click y escribes los nombres de los equipos del partido, por ejemplo: Correcaminos vs Jaiba Brava";
}


function nuevo_Admin()
{
  echo "Ingresa el nombre de usuario y contraseña del nuevo administrador en las casillas correspondientes para crear el nuevo administrador."."<br>";
}


function dashboardAdmin($numero)
{
  if ($numero==1) {
      echo "En la parte izquierda de la pantalla se muestran las diferentes opciones del menú en las cuales puedes navegar."."<br>".
        "En la opción de \"Partidos\" subes la cédula de cada partido y ves la ubicación de los partidos.". "<br>".
        "En \"Torneo\" puedes ver la tabla general, de goleo individual y ver los resultados de la jornada"."<br>".
        "Para ver la gráfica de los 10 mejores equipos dirígete a \"Estadísticas\". Si requieres dar de baja a un equipo dirígete a
        \"Dar De baja un equipo\"  ".  "<br>".
        "Ve a \"Rol de juegos\" para hacer el rol de juegos "."<br>".
        "Si quieres agregar un nuevo administrador para el sistema ve a la opción de \"Crear nuevo administrador\" " . "<br>" .
        "Si quieres cambiar de contraseña dirígete a \"Cambiar contraseña\"";
  }
  else {
    if ($numero==2) {
      echo "En el contenido de la página se muestran el número de equipos, número de partidos jugados, total de goles, promedio
      de goles por partido y el líder general del torneo."."<br>".
      "Más abajo puedes observar el nombre de todos los equipos participantes del torneo";
    }
    else {
      if ($numero==3) {
        echo "En la parte superior derecha se muestra la imágen del Administrador en la cual puedes dar click y
        seleccionar \"Cerrar sesión\" " ;
      }
    }
  }

}




function cambiarContrasena()
{
  echo "Ingresa la nueva contraseña con la cual accederás de ahora en adelante al sistema";
}


function bajaEquipo()
{
  echo "En el campo \"Nombre equipo\" ingresa el equipo que que será baja del torneo.<br>".
        "Puedes agregar un comentario del por qué es baja del torneo dicho equipo.";
}


function tablaGeneral()
{
 echo "En los botones arriba de la tabla eliges el formato para guardarla"."<br>" . "copy para copiarla.";
}



 ?>
