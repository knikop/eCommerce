<?php
namespace app\controllers;

class Comment extends \app\core\Controller {

    public function index() {
		$comment = new \app\models\Comment();
		$comments = $comment->getAll();
        $this->view('Comment/index', $comments);
    }
    
    public function add(){
		if(isset($_POST['action'])){
			$newComment = new \app\models\Comment();
			$newComment->comment = $_POST['comment'];
			$newComment->insert();
			header('location:/Comment/index');
		}
		else
			$this->view('Comment/add');
	}

	public function delete($comment_id){
		$comment = new \app\models\Comment();
		$comment->comment_id = $comment_id;
		$comment->delete($comment_id);
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