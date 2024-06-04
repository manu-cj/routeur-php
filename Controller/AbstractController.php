<?php
abstract class AbstractController
{
    abstract public function index();
    public function getPath($page) {
        require __DIR__ . "/public/".$page.".html.php";
    }
}

  


?>