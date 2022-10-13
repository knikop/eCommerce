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

    public function get($publication_id){
		$SQL = "SELECT * FROM publication WHERE publication_id=:publication_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['publication_id'=>$publication_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Publication');
		return $STMT->fetch();
	}

    public function getBySearch($keyword) {
        $SQL = ("SELECT * FROM profile WHERE caption LIKE '%$keyword%'") or die("could not search");
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Publication");
        return $STMT->fetch();
    }

    function insert() { 
        $SQL = "INSERT INTO publication(picture, caption) 
        VALUES(:picture, :caption)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['picture'=>$this->picture, 'caption'=>$this->caption]);
    }

    function update() {
        $SQL = "UPDATE publication SET picture = :picture, caption = :caption
        WHERE publication_id = :publication_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['picture'=>$this->picture, 'caption'=>$this->caption, 'publication_id'=>$this->publication_id]);
    }

    public function delete(){
		$SQL = "DELETE FROM publication WHERE publication_id=:publication_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['publication_id'=>$this->publication_id]);
	}
}