<?php
namespace app\models;

class Comment extends \app\core\Model{
    //needs validation from the user's id and post's id before adding comment.
	public function insert(/*$publication_id, $profile_id*/){
		$SQL = "INSERT INTO comment(publication_id, profile_id, comment) VALUES (:publication_id, :profile_id, :comment)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['comment'=>$this->comment]);
	}

	public function update(){
		$SQL = "UPDATE comment SET comment=:comment WHERE comment_id=:owner_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['comment'=>$this->comment,
						'comment_id'=>$this->owner_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM comment WHERE publication_id=:publication_id AND profile_id=:profile_id	";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['comment_id'=>$this->comment_id]);
	}
}