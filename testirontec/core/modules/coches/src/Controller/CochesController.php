<?php

namespace Drupal\coches\Controller;

use Drupal\Core\Controller\ControllerBase;

class CochesController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {

	$infoImpresion="";  
	  
		
		$infoImpresion=$this->getCocheById(1);
		return [
		  '#type' => 'markup',
		  '#markup' => $this->t($infoImpresion),
		];
	  }

	public function getCocheById ($id_coche){
		$query = db_query("SELECT * FROM coches WHERE id_coche= :id",  array(":id" => $id_coche));
		$record = $query->fetchAll();	
		if ($record){
			return $record;	
		}else{
			return [];
		}
		
	}
	
	public function getCocheByColor ($color){
		$query = db_query("SELECT * FROM coches WHERE color= :nombreColor",  array(":nombreColor" => $color));
		$record = $query->fetchAll();	
		if ($record){
			return $record;	
		}else{
			return [];
		}
		
	}	
	
	public function getAll (){
		$query = db_query("SELECT * FROM coches");
		$record = $query->fetchAll();	
		if ($record){
			return $record;	
		}else{
			return [];
		}
		
	}		
	
	public function recorrerFila($fila){
		$respuesta="";
		foreach ($fila as $clave=>$valor) {
			$respuesta.="$clave: $valor. <br>";
		}
		return	$respuesta;	
	}
  
  }