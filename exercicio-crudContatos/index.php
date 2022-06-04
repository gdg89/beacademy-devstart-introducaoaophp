<?php

$url = $_SERVER['REQUEST_URI'];//Pega url que usuario accesou
include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';

match($url){
   '/'=> home(),
   '/login'=> login(),
   '/cadastro' => cadastro(),
   '/listar' => listar(),
   default => erro404(),
};

// if ($url === '/'){//compara se o que o cliente accesou a gente tem mapeado na plataforma.
//    home();
// }elseif($url === '/login'){
//     login();
// }elseif($url === '/cadastro'){
//    cadastro();
// }elseif($url === '/listar'){
//    listar();

// }else{
//    erro404();
// }

include 'telas/footer.php';