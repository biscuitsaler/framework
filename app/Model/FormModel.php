<?php
namespace Model;
use W\Model\UsersModel;

class FormModel extends UsersModel
{
    public $email;
    public function login($email)
    {
        if ($this -> getUserByUsernameOrEmail($email)) {
            return true;
        }
        else {
            session_unset();
        }
    }
}