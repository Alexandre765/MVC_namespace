<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

use App\Controller\
{
    PessoaController,
    ProdutoController,
    CategoriaController,
};






include 'Controller/ProdutoController.php';
include 'Controller/PessoaController.php';
include 'Controller/CategoriaController.php';

switch($uri_parse)
{
    //Daqui para baixo esta chamado algumas rotas e falando o que 
    //algumas outras tem que fazer
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;
    
    
    
    case '/formulario':
        include 'View/udy.php';
    break;

    case '/processa':
        echo "vai pegar o que o usuário digitou <br />";
        echo $_POST['nome'];
        echo "<br />";
        var_dump($_POST);
    break;

    case '/produto':
        echo "listar produtos";
    break;

    case '/produto/ver':
        echo "ver detalhes de produto";
    break;

    case '/produto/delete':
        echo "remover produto";
    break;

    case '/produto/salvar':
        echo "salva no banco de dados";
    break;

 

    case '/Produto':
        ProdutoController::index();
    break;

    case '/Produto/form':
        ProdutoController::form();
    break;

    case '/Produto/save':
        ProdutoController::save();
    break;
    
    
    
    case '/formulario':
        include 'View/Produto.php';
    break;
    case '/info':
        echo "vai pegar o que o usuário digitou <br />";
        echo $_POST['nome'];
        echo "<br />";
        var_dump($_POST);
    break;

    case '/Categoria':
        CategoriaController::index();
    break;

    case '/Categoria/form':
        CategoriaController::form();
    break;

    case '/Categoria/save':
        CategoriaController::save();
    break;
    
    
    
    case '/formulario':
        include 'View/Categorias.php';
    break;
    case '/infor':
        echo "vai pegar o que o usuário digitou <br />";
        echo $_POST['nome'];
        echo "<br />";
        var_dump($_POST);
    break;

//esta falando se nada disso acontecer ou estiver alguma 
//coisa errada vai dar esse erro ai
    default:
        echo "erro 404";
    break;
}