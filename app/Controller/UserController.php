<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;

class UserController extends \W\Controller\Controller {
  public function inscriptionUser() {
    $user= new UsersModel();
    $test = $user -> getUserByUsernameOrEmail('unsinge@live.fr');
    var_dump($test);
    $this -> show('user/User_view');
  }
}
