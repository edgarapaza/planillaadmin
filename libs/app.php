<?php
session_start();

class App
{
  function __construct()
  {
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    if (empty($url[0])) {
      $archivoController = "controller/login.php";
      require_once $archivoController;
      $controller = new Login;
      $controller->loadModel('login');
      $controller->render();
      return false;
    }
    $archivoController = "controller/" . $url[0] . ".php";
    if ($_SESSION['katari'] && $_SESSION['katari']=='katariSoftware') {
      if (empty($url[0])) {
        $archivoController = "controller/login.php";
        require_once $archivoController;
        $controller = new Login;
        $controller->loadModel('login');
        $controller->render();
        return false;
      }
      $archivoController = "controller/" . $url[0] . ".php";
      if (file_exists($archivoController)) {
        require_once $archivoController;
        $controller = new $url[0];
        $controller->loadModel($url[0]);
        $nparam = sizeof($url);
        if($nparam > 1)
        {
          if($nparam > 2)
          {
            $param = [];
            for($i = 2; $i < $nparam; $i++)
            {
              array_push($param, $url[$i]);
            }
            $controller->{$url[1]}($param);
          }else{
            $controller->{$url[1]}();
          }
        }else{
          $controller->render();
        }
      } else {
        require "controller/error.php";
        $controller = new ErrorGeneral();
        $controller->render();
      }
    } else {
      if (empty($url[0])) {
        $archivoController = "controller/login.php";
        require_once $archivoController;
        $controller = new Login;
        $controller->loadModel('login');
        $controller->render();
        return false;
      }
      if (isset($url[1]) && $url[1] == "user") {
        $archivoController = "controller/login.php";
        require_once $archivoController;
        $controller = new Login;
        $controller->loadModel('login');
        $controller->user();
        $controller->render();
      } else {
        header("location: " . constant('URL'));
      }
    }
  }
}
