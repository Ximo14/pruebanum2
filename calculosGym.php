<?php
/**
 * Ximo Gil
 */
class calculogym
{
  private $socioshombres=[];
  private $sociosmujeres=[];


public function nuevoSocioHombre($socioh)
{
$this->socioshombres[]=$socioh;

}

public function nuevoSocioMujer($sociom)
{
$this->sociosmujeres[]=$sociom;

}

public function mediaSociosHombres()
{

  $mediah=array_sum($this->socioshombres)/count($this->socioshombres);
  return $mediah;

}

public function mediaSociosMujeres()
{

  $mediam=array_sum($this->sociosmujeres)/count($this->sociosmujeres);
  return $mediam;

}


}


 ?>
