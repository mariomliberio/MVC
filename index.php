<?php
include $randomcont;
include $randomhome;

//include "login.php";
if(isset($_GET['page']) && !empty($_GET['page'])){
    switch($_GET['page']) {
        case 'content':
            $view = "view/content.php";
            $controller = "controller/content_controller.php";
            //include $controller;
        break;
        default:
            $view = "view/home.php";
            $controller = "controller/content_controller.php";
            //include $controller;
        break;
    }
} else {
    $view = "view/home.php";
};





include "view/head.php";
include $view;
include "view/footer.php"

?>
