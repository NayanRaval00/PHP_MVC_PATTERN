<?php
    
    $page  = 'home';
    $function = 'home';
    if (!isset($function)) {
        include 'home.php';
    }
    if (isset($_GET['page']) && $_GET['page']!='') {
        # code...
        $page = $_GET['page'];
        // if ($page == "home") {
        //     include 'view/home.php';
        // }elseif ($page == "about") {
        //     include 'view/about.php';
        // }
    }
    
    if (isset($_GET['function']) && $_GET['function']!='') {
        # code...
        $function = $_GET['function'];
        // if ($function == "home") {
        //     include 'view/home.php';
        // }elseif ($function == "about") {
        //     include 'view/about.php';
        // }
    }
    if (file_exists('controller/'.$page.'.php')) {
        include('controller/'.$page.'.php');
        $class = $page.'controller';
        $obj = new $class();
        if (method_exists($class,$function)) {
            $obj->$function();
        }else {
            echo("Function  Not exists");
        }
    }else {
        echo("file not exists");
    }    
?>
