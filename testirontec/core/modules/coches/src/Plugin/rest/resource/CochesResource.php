<?php

namespace Drupal\coches\Plugin\rest\resource;

use Drupal\coches\Controller\CochesController;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Coches Resource
 *
 * @RestResource(
 *   id = "coches_resource",
 *   label = @Translation("Coches Resource"),
 *   uri_paths = {
 *     "canonical" = "/coches/coches_resource"
 *   }
 * )
 */

class CochesResource extends ResourceBase {
  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {

	$cochesController= new CochesController();
	
	$metodo=$_GET["metodo"];
	switch ($metodo){
		case "1": //todos
			$resultado=$cochesController->getAll();
			break;
		case "2": //por id
			$id=$_GET['id'];
			$resultado=$cochesController->getCocheById($id);
			break;
		case "3": //por color
			$color=$_GET['color'];
			$resultado=$cochesController->getCocheByColor($color);
			break;
	}

    $response= new ResourceResponse(json_encode($resultado));
	$response->addCacheableDependency($account);
	return $response;
  }
}