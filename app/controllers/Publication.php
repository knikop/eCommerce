<?php
namespace app\controllers;

class Publication extends \app\core\Controller {

    public function index() {
		$publication = new \app\models\Comment();
		$publications = $publication->getAll();
        $this->view('Publication/index', $publication);
    }
    
    public function add(){
		if(isset($_POST['action'])){
			$newPublication = new \app\models\Publication();
			$filename = $this->saveFile($_FILES['picture']);
			$newPublication->picture = $filename;
			$newPublication->caption = $_POST['caption'];
			$newPublication->insert();
			header('location:/Publication/index');
		}
		else
			$this->view('Publication/add');
	}

	public function delete($publication_id){
		$publication = new \app\models\Profile();
		$publication = $publication->get($publication_id);
		unlink("images/$publication->picture");
		$publication->delete();
		header('location:/Publication/index/');
	}


	public function edit($publication_id){
		$publication = new \app\models\Publication();
		$publication = $publication->get($publication_id);
		if(isset($_POST['action'])){
			$filename = $this->saveFile($_FILES['picture']);
			if($filename){
				unlink("images/$publication->picture");
				$publication->picture = $filename;
			}
			$publication->caption = $_POST['caption'];
			$publication->update();
			header('location:/Publication/index/');
		}else{
			$this->view('Publication/edit', $publication_id);
		}
	}
}