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

		$coches=$this->getAll();
		foreach ($coches as $coche){
			$infoImpresion.=$this->recorrerFila($coche);
		}
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
	public function recorrerFila ($uncoche) {
		$res="";
		foreach ($uncoche as $c=>$v){
			if ($c!="foto"){
				$res.="$c = $v <br>";
			}else{
				$res.="<img src='$v' style='max-width:200px'/> <br>";
			}
		}
		$res.="----------<br><br>";
		return $res;
	}
  }