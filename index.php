<?php
//include "config.php";
//include "login.php";
if(isset($_GET['page']) && !empty($_GET['page'])){
    switch($_GET['page']) {
        case 'content':
            $view = "view/content.php";
            $controller = "controller/content_controller.php";
            include $controller;
            $model = "model/modelcontent.php";
            include $model;
        break;
        default:
            $view = "view/home.php";
            $controller = "controller/home_controller.php";
            include $controller;
            $model = "model/modelhome.php";
            include $model;
        break;
    }
} else {
    $view = "view/home.php";
};

include "view/head.php";
include $view;
include "view/footer.php"
?>
