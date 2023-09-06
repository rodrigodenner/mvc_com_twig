<?php

namespace app\controllers\portal;

use app\models\portal\Postagem;
use app\controllers\ContainerController;

class NoticiasController extends ContainerController
{
	public function index($request) {
		$postagem = new Postagem;
		$postagens = $postagem->all();

		$this->view([
			'title'=> 'Noticias de Hoje',
			'postagens' => $postagens
		],'portal.noticias');



	}

	public function show($id) {
		
        $postagem = new Postagem;
        $postagens = $postagem->find($id); 
		var_dump($postagens->id);
        $this->view([
            'title' => 'Detalhes da Notícia',
            'postagens' => $postagens
        ], 'portal.detalhes_noticias');
    }

	
}


