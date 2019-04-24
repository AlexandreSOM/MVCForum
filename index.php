<?php
include 'include.php';

if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    $indexController = new IndexController();
    $indexController->renderIndexAction();
}

else if($_GET['controller'] === 'article' && $_GET['action'] == 'NewArticle'){
    $articleController = new ArticleController();
    $articleController->newArticleAction();
}

else if($_GET['controller'] === 'article' && $_GET['action'] == 'formArticle'){
    $articleController = new ArticleController();
    $articleController->formArticleAction();
}
else if($_GET['controller'] === 'article' && $_GET['action'] == 'delete'){
    $articleController = new ArticleController();
    $articleController->deleteArticleAction($_GET['id']);
}

else if($_GET['controller'] === 'article' && $_GET['action'] == 'updateForm' && isset($_GET['id'])){
    $articleController = new ArticleController();
    $articleController->updateForm($_GET['id']);
}

else if($_GET['controller'] === 'article' && $_GET['action'] == 'updateArticle' && isset($_GET['id'])){
    $articleController = new ArticleController();
    $articleController->updateArticleAction($_GET['id']);
}

else
    {
    $exception = new Exception("La page demandée n'existe pas", 404);
    throw  $exception;
}


?>