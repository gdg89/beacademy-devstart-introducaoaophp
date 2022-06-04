<?php

$url = $_SERVER['REQUEST_URI'];//Pega url que usuario accesou
include 'telas/head.php';
include 'telas/menu.php';

if ($url === '/'){//compara se o que o cliente accesou a gente tem mapeado na plataforma.
    include 'telas/home.php';
}elseif($url === '/login'){
    include 'telas/login.php';
}elseif($url === '/cadastro'){
   include 'telas/cadastro.php';
}else{
    include 'telas/404.php';
}

include 'telas/footer.php';