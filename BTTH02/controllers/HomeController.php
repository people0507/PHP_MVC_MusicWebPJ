<?php
require("services/ArticleService.php");
class HomeController {
    public function index() {
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticle();
        include("views/home/index.php");
    }

    public function login() {
        include("views/home/login.php");
    }
}