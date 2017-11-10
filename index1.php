<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login y registro</title>
  </head>
  <body>
    <!--<h1><?php include("config.php"); ?></h1>-->
    <form class="" action="" method="post">
      <label for="">usuario</label><input type="text" name="userreg" value=""><br>
      <label for="">Contraseña</label><input type="password" name="pwreg" value=""><br>
      <label for="">Repetir contraseña</label><input type="password" name="pwregveri" value=""><br>
      <input type="submit" name="registrar" value="Registrarme"><br>
    </form>
    <?php
      include("config.php");

      if (isset($_POST['registrar'])) {
        if ($_POST['userreg'] == '' or $_POST['pwreg'] == '') {
          echo "Debes llenar todos los campos";
        }else {
          $sql = "SELECT * FROM usuarios";
          $rec = mysqli_query($conexion, $sql);
          $verificar = 0;

          while ($resultado = mysqli_fetch_object($rec)) {
            if ($resultado->nombreusuario == $_POST['userreg']) {
              $verificar = 1;
            }
          }//Fin while
          if ($verificar == 0) {
            if ($_POST['pwreg'] == $_POST['pwregveri']) {
              $nom = $_POST['userreg'];
              $pw = $_POST['pwreg'];
              //$pw_en = password_hash($pw, PASSWORD_DEFAULT);

              $conexion->query("INSERT INTO usuarios(nombreusuario, contrasena) VALUES ($nom, $pw)");
              mysqli_query($conexion, $sql);

              echo "Te has registrado con exito";
            }else {
              echo "Las contraseñas no coinciden";
            }

          }else {
            echo "El nombre de usuario ya esta registrado, prueba con otro";
          }
        }
      }
    ?>
  </body>
</html>
