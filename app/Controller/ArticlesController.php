<?php
namespace Controller;

use \W\Controller\Controller;

class ArticlesController extends Controller
{
    public function afficher()
     {
         $this -> show('articles/home');
     }
}