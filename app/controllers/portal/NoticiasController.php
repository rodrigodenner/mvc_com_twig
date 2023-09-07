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

	public function show($request) {

		$id = $request->next;
		$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
		
        $postagem = new Postagem;
		
        $postagens = $postagem->find($id); 

        $this->view([
            'title' => 'Detalhes da Notícia',
            'postagens' => $postagens
        ], 'portal.news');
    }

	
}


