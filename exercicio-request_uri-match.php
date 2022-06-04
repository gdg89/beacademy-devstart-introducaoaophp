
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<body>
    <div class="container ">
        <header class="text-light bg-dark p-3 mt-1">
        <?php

            $url = $_SERVER['REQUEST_URI'];
                
           echo match($url){
                
                '/exercicio-request_uri-match.php' => '<h1>Pagina inicial</h1>',
                '/exercicio-request_uri-match.php/login' => '<h1>Pagina de login</h1>',
                '/exercicio-request_uri-match.php/cadastro'=> '<h1>Pagina de cadastro</h1>',
                default => '<h1>Pagina não encontrada </h1>',

            };
          
        ?>    
            
        </header>
        <main>
       
       
        </main>



    </div>
</body>




