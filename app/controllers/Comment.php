<?php
namespace app\controllers;

class Comment extends \app\core\Controller {

    public function index() {
        
        $this->view('Comment/index');
    }
    
    public function add(){
		//if I submit the form
		if(isset($_POST['action'])){
			//create a new owner object
			$newComment = new \app\models\Comment();
			//populate the new owner objects
			$newComment->comment = $_POST['comment'];
			$newComment->insert();
			//redirect back to the list (index)
			header('location:/Comment/index');
		}
		else
			$this->view('Comment/add');
	}

	public function delete($comment_id){
		$comment = new \app\models\Comment();
		$comment->comment_id = $comment_id;
		$comment->delete();
		header('location:/Comment/index');
	}

	public function edit($comment_id){
		$comment = new \app\models\Comment();
		$comment = $comment->get($comment_id);
		if(isset($_POST['action'])){
			$comment->comment = $_POST['comment'];
			
			$comment->update();

			header('location:/Comment/index');
		}else{
			$this->view('Comment/edit', $comment);
		}
	}
}