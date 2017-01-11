<?php

namespace Controller;

use \W\Controller\Controller;

class ArticleController extends Controller
{
    public function afficherArticle() {
    $this -> show('article/article_view');
  }
}
 ?>