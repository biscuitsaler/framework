<?php
namespace Controller;
use \W\Controller\Controller;
use \Model\LoginModel;
class UserController extends Controller
{
    public function home()
    {
        $this->show('user/home');
    }
    public function login()
    {
        $tintin = new LoginModel("jeanmich@gmail.com");
        var_dump($tintin);
        $this->show('user/login');
    }
    public function logout()
    {
        $this->show('user/logout');
    }
    public function inscription()
    {
        $this->show('user/inscription');
    }

    public function form()
    {
      echo "yolo";
    $this->show('user/form');
    }
  }
    
