<?php

namespace App\Controller;

use App\Model\PessoaModel;

class PessoaController 
{
    /**
     * Os métodos index serão usados para devolver uma View.
     */
    public static function index() 
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->getAllRows();

        include 'View/modules/Pessoa/ListaPessoas.php';
    }

   /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form()
    {
       include 'Model/PessoaModel.php';
       $model =new PessoaModel();

       if(isset($_GET['id']))
       $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Pessoa/FormPessoa.php';
    }

    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save() {

        include 'Model/PessoaModel.php'; // inclusão do arquivo model.

        // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
        // pelo usuário no formulário (note o envio via POST)
        $pessoa = new PessoaModel();
        $pessoa->id = $_POST['id'];
        $pessoa->nome = $_POST['nome'];
        $pessoa->rg = $_POST['rg'];
        $pessoa->cpf = $_POST['cpf'];
        $pessoa->data_nascimento = $_POST['data_nascimento'];
        $pessoa->email = $_POST['email'];
        $pessoa->telefone = $_POST['telefone'];
        $pessoa->endereco = $_POST['endereco'];

        $pessoa->save();  // chamando o método save da model. 

        header("Location: /pessoa"); // redirecionando o usuário para outra rota.
    }
    public static function delete()
    {
        include 'Model/PessoaModel.php'; // inclusão do arquivo model.

        $pessoa = new PessoaModel();

        $pessoa->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /pessoa"); // redirecionando o usuário para outra rota.
    }
   
}