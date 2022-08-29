<?php

namespace App\Controller;

use App\model\ProdutoModel;

class ProdutoController
{
    //os métodos abaixo vai servi para alguma View ou model,nesse vai retorna uma View
    public static function  index()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View/modules/Produto/ProdutoListar.php';
    }
//nesse tem o formulário do usuário
    public static function form()
    {
        include 'Model/ProdutoModel.php';
        $model =new ProdutoModel();

        if(isset($_GET['id']))
        $model = $model->getBYId((int) $_GET['id']);

        include 'View/modules/Produto/FormProduto.php';
    }
//aqui vai colocar os dados para inserir no banco e depois salvar
    public static function save() {

        //vai incluir o model
        include 'Model/ProdutoModel.php'; 

//cada campo sento colocado os dados que foram entregues no formulário que o usuario fez
// e usaremos a variável $_POST para enviar essas informações.
        $produto = new ProdutoModel();
        //$produto->idproduto = $_POST['idproduto'];     
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->codigo = $_POST['codigo'];
        $produto->estoque = $_POST['estoque'];
        $produto->fornecedor = $_POST['fornecedor'];
        $produto->categoria = $_POST['categoria'];
        $produto->data_entrada = $_POST['data_entrada'];

        //aqui ele esta recorendo ao método save da model.
        $produto->save();
//coloca o usuario em alguma outra rota
        header("Location: /Produto"); 
    }
// vai ter a funçãode deletar  o "arquivo"
    public static function delete()
    {
     include 'Model/ProdutoModel.php';

     $produto = new ProdutoModel();

     $produto->delete((int) $_GET['id']);
     header("Location: /Produto");
    }
}