<?php
class ArticleController{
    public function newArticleAction(){
        require 'Vue/NewArticle.php';
    }

    public function formArticleAction()
    {
        $articleManager = new ArticleManager();
        $article = new Article(null, $_POST['titre'], $_POST['contenu'],null);
        $articleManager->insertArticle($article);
        // appeler l'article manager pour enregistrer en base l'article
        var_dump("Ici je vais appeler l'insertion de mon article manager");
        header("location: http://localhost/project/forumMvc/index.php?controller=index&action=renderIndex");
    }

    public function deleteArticleAction($id)
    {
        $articleManager = new ArticleManager();
        $articleManager->deleteArticle($id);
        // appeler l'article manager pour enregistrer en base l'article
        header("location: http://localhost/project/forumMvc/index.php?controller=index&action=renderIndex");
    }

    public function updateForm($id){
        $articleManager = new ArticleManager();
        $article = $articleManager->selectOne($id);
        require 'Vue/updateArticle.php';
    }

    public function updateAticleAction($id)
    {
        $articleManager = new ArticleManager();
        $article = new Article ($id, $_POST['titre'], $_POST['contenu']);
        $articleManager->updateArticle($article);
        // appeler l'article manager pour enregistrer en base l'article
        header("location: http://localhost/project/forumMvc/index.php?controller=index&action=renderIndex");
    }

}
?>