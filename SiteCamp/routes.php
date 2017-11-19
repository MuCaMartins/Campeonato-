<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {


    case '/cadastro':
        
        require './app/views/cadastro.php';
        break;
    
    case '/salvar':
           
        $testeController->salvar();
        break;
    
    case '/salvarj':
           
        $testeController->salvar();
        require './app/views/consultar.php';
        break;    


    case '/consultar':
            
        $testeController->consultar();
        break;

    
    case '/teste':
            
        require './app/views/teste.php';
        break;

    case '/cj':
            
        $testeController->cj();
        break;

    case '/home':
            
        require './app/views/home.php';
        break;

    case '/class':
            
        require './app/views/class.php';
        break;

    default:
        die('Essa rota não é valida');
        break;
}
