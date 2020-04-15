<?php

require_once('vendor/autoload.php');

//Instantiate the F3 Base class
$f3 = Base::instance();

$f3->route('GET / ', function(){
    //echo '<h1>Hello world</h1>';
    $view = new Template();
    echo $view->render('views/home.html');

});

$f3-> run();