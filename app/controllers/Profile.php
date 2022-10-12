<?php
namespace app\controllers;

class Profile extends \app\core\Controller {

    public function index() {
        $profile = new \app\models\Profile();
        $profiles = $profile->getAll();
        $this->view('Profile/index',$profiles);
    }
    
}