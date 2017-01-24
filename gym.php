<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'calculosGym.php';
    echo "Total Lunes Hombres = ".$_POST['luneshombres']."<br><br>";
    echo "Total Lunes Mujeres = ".$_POST['lunesmujeres']."<br><br>";

    echo "Total Martes Hombres = ".$_POST['marteshombres']."<br><br>";
    echo "Total Martes Mujeres = ".$_POST['martesmujeres']."<br><br>";

    echo "Total Miercoles Hombres = ".$_POST['miercoleshombres']."<br><br>";
    echo "Total Miercoles Mujeres = ".$_POST['miercolesmujeres']."<br><br>";

    echo "Total Jueves Hombres= ".$_POST['jueveshombres']."<br><br>";
    echo "Total Jueves Mujeres = ".$_POST['juevesmujeres']."<br><br>";

    echo "Total Viernes Hombres = ".$_POST['vierneshombres']."<br><br>";
    echo "Total Viernes Mujeres = ".$_POST['viernesmujeres']."<br><br>";

    echo "Total Sabado Hombres = ".$_POST['sabadohombres']."<br><br>";
    echo "Total Sabado Mujeres = ".$_POST['sabadomujeres']."<br><hr>";

    $gestor= new calculogym();

    //HOMBRES
    $gestor->nuevoSocioHombre($_POST['luneshombres']);
    $gestor->nuevoSocioHombre($_POST['marteshombres']);
    $gestor->nuevoSocioHombre($_POST['miercoleshombres']);
    $gestor->nuevoSocioHombre($_POST['jueveshombres']);
    $gestor->nuevoSocioHombre($_POST['vierneshombres']);
    $gestor->nuevoSocioHombre($_POST['sabadohombres']);


    //MUJERES
    $gestor->nuevoSocioMujer($_POST['lunesmujeres']);
    $gestor->nuevoSocioMujer($_POST['martesmujeres']);
    $gestor->nuevoSocioMujer($_POST['miercolesmujeres']);
    $gestor->nuevoSocioMujer($_POST['juevesmujeres']);
    $gestor->nuevoSocioMujer($_POST['viernesmujeres']);
    $gestor->nuevoSocioMujer($_POST['sabadomujeres']);

    //MEDIA HOMBRES
    echo "La media de hombres es = ".$gestor->mediaSociosHombres()."<br><br>";
    //MEDIA MUJERES
    echo "La media de mujeres es = ".$gestor->mediaSociosMujeres();

    ?>

  </body>
</html>
