<?php
namespace app\models;

class Publication extends \app\core\Model {
    public function getAll() {
        $SQL = "SELECT * FROM publication";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Publication");
        return $STMT->fetchAll();
    }

    public function getBySearch($keyword) {
        $SQL = ("SELECT * FROM profile WHERE caption LIKE '%$keyword%'") or die("could not search");
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Publication");
        return $STMT->fetch();
    }

    function insert($profile_id) { 
        $SQL = "INSERT INTO publication(profile_id, picture, caption) 
        VALUES(:user_id, :picture, :caption)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['profile_id'=>$profile_id, 'picture'=>$this->picture, 
        'caption'=>$this->caption]);
    }

    function updateCaption() {
        $SQL = "UPDATE publication SET caption = :caption
        WHERE publication_id = :publication_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['caption'=>$this->caption, 'publication_id'=>$this->publication_id]);
    }

    public function delete(){
		$SQL = "DELETE FROM publication WHERE publication_id=:publication_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['publication_id'=>$this->publication_id]);
	}
}