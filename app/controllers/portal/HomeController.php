<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;


class HomeController extends ContainerController
{
    public function index() {
		$this->view([
			'title'=> 'Portal de noticias',
		
		],'portal.home');


		
	}

	

}