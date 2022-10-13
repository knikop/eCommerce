<?php
namespace app\models;

class Comment extends \app\core\Model{
	public function getAll(){
		$SQL = "SELECT * FROM comment";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Comment');
		return $STMT->fetchAll();
	}

	public function get($comment_id){
		$SQL = "SELECT * FROM comment WHERE comment_id=:comment_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['comment_id'=>$comment_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Comment');
		return $STMT->fetch();
	}
	
	//needs validation from the user's id and post's id before adding comment.
	public function insert(){
		$SQL = "INSERT INTO comment(comment) VALUES (:comment)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['comment'=>$this->comment]);
	}

	public function update(){
		$SQL = "UPDATE comment SET comment=:comment WHERE comment_id=:comment_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['comment'=>$this->comment,
						'comment_id'=>$this->comment_id]);
	}

	public function delete($comment_id){
		$SQL = "DELETE FROM comment WHERE comment_id=:comment_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['comment_id'=>$this->comment_id]);
	}
}