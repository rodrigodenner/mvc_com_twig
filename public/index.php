<?php
//devclas.com.br/curso/show/12
require '../bootstrap.php';

use core\Controller;
use core\Method;
use core\Parameters;

// use core\Parameters;
// use core\Method;


// vardd(app\classes\Uri::uri());
try {
	$controller = new Controller;
	$controller = $controller->load();

    $method = new Method;
	$method = $method->load($controller);

	

	$parameters = new Parameters;
	$parameters = $parameters->load();

	$controller->$method($parameters);

} catch (\Exception $e) {
	dd($e->getMessage());
}