<?php

 function tablaGeneral()
{
  echo "En los botones arriba de la tabla eliges el formato para guardarla"."<br>" . "copy para copiarla.";
}


function bajaAlumno()
{
 echo "Click en el botón \"Dar de baja\"  para dar de baja jugador y enviar los motivos por los que es dado de baja."."<br>" .
        "Botón \"Cancelar\" para borrar la matricula ingresada";
}


function agregarJugador()
{
 echo "Click en el botón \"Agregar jugador\"  para agregar el jugador a tu equipo."."<br>" .
        "Botón \"Cancelar\" para borrar la matricula ingresada"."<br>" .
        "Es requisito indispensable que el jugador que se agregará se haya registrado en el sistema";
}


function ultimoPartido()
{
 echo "En la parte izquierda se muestran las tablas de los equipos del partido con los nombres de cada jugador que participó en
        en encuentro."."<br>" .
        "Al lado derecho de dichas tablas se muestran las tablas de goles de cada equipo con los nombres de los jugadores
        y la cantidad de goles de cada jugador que anotó."."<br>" . "<br>".
        "Al final puedes escribir y enviar un comentario del partido al dar click en \"Enviar comentario\"";
}


function contactos()
{
 echo "Se muestran los diferentes contactos que son los compañeros de tu equipo, puedes ver su perfil y su cuenta de Facebook."."<br>" ;
}


function dashboard($numero)
{
  if ($numero==1) {
      echo "En la parte izquierda de la pantalla se muestran las diferentes opciones del menú en las cuales puedes navegar."."<br>".
        "Si no has registrado un equipo o no te han registrado en uno entonces SÓLO podrás acceder a las opciones de \"Torneo\"  y \"Estadísticas\" .". "<br>".
        "Si te registraste en tu equipo o alguien más te registró ya no podrás acceder a la opción \"Registrar Equipo\" "."<br>".
        "SÓLO podrás agregar o dar de baja jugador si tú fuiste quien registró al equipo";
  }
  else {
    if ($numero==2) {
      echo "En el contenido de la página se muestran tus partidos jugados, goles anotados, promedio de goles."."<br>".
      "Después se muestran tus compañeros de equipo con sus respectivos partidos jugados."."<br>".
      "También dispones de pestañas de información que te indican los partidos del equipo así como sus puntos. También te mostrará
      advertencias si llevan dos partidos perdidos y otra pestaña de peligros si llevan tres partidos perdidos consecutivos.";
    }
    else {
      if ($numero==3) {
        echo "En la parte superior derecha se muestran las notificaciones de los próximos partidos y al lado puedes encontrar opciones del perfil
              en la imagen de tu perfil";
      }
    }
  }

}



function registrarEquipo()
{
 echo "Para registrar tu equipo se requiere el nombre del equipo y de las matrículas de 6 jugadores que ya deben estar registrados en el sistema y dar click
      en \"Registrar equipo\", después si deseas agragar más jugadores dirígete al menú principal en la opción de \"Mi equipo/Agregar Jugador\"."."<br>".
      "Éxito en el torneo!!!" ;
}



?>
