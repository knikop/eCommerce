<?php
namespace app\controllers;

class Main extends \app\core\Controller {
    public function index(){
        $newPublication = new \app\models\Publication();
        $profile_id = (isset($_SESSION['profile_id'])) ? $_SESSION['profile_id'] : false;

        $publications = ($profile_id) ? $newPublication->getAll($profile_id) : $newPublication->getAllPublic();
        $this->view('Main/index', $publications);
    }
}