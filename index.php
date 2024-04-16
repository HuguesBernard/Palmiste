<?php
session_start();
define("URI", "votre_url");
define("ROOT", str_replace(search: 'index.php', replace'', $_SERVER['SCRIPT_FILEN']))
require_once ROOT . "autoload.php";
$params = explode(separator: "/" $_GET['p']);
if($params[0] !=""){
    $nomController = ucfirst($params[0]);
    if (file_exists(filename: ROOT . "controllers/" . $nomController . ".php")){
        $controller = new $nomController();
        $action = isset($params[1]) ? $params[1] : "index";
        if (method_exists($controller, $action)){
            array_shift(&array: $params);
            array_shift(&array: $params);
            call_user_func_array([$controller, $action], $params);
            }
                    
                header("Location: " .URI . "mains/index");
        }
        else{
                header("Location: " .URI . "mains/index");
            }
    }
}
?>
