<?php
namespace app\models;

class Profile extends \app\core\Model {

    public function get($profile_id) {
        $SQL = 'SELECT * FROM profile WHERE profile_id = :profile_id';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['profile_id'=> $profile_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Profile");
        return $STMT->fetch();
    }

    public function getAll() {
        $SQL = 'SELECT * FROM profile';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Profile");
        return $STMT->fetchAll();
    }

    function insert($user_id) { 
        $SQL = 'INSERT INTO profile(user_id, first_name, middle_name, last_name) 
        VALUES(:user_id, :first_name, :middle_name, :last_name)';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id, 'first_name'=>$this->first_name, 
        'middle_name'=>$this->middle_name, 'last_name'=>$this->last_name]);
    }

    function update() {
        $SQL = 'UPDATE profile SET first_name = :first_name, middle_name = :middle_name,
         last_name = :last_name WHERE profile_id = :profile_id';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['first_name'=>$this->first_name, 'middle_name'=>$this->middle_name, 
        'last_name'=>$this->last_name, 'profile_id'=>$this->profile_id]);
    }

}