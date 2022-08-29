<?php

namespace App\DAO;

use App\model\ProdutoModel;
use \PDO;



class ProdutoDAO
 {
 //Guarda o link da conexão com o banco de dados.
private $conexao;

//ele é um método construtor,sendo usado para um processo 
//por meio do qual se realiza a cópia de um objeto (classe) existente. 
//Uma classe, a qual tem a função de determinar um tipo de dado
// para que possamos utilizá-la depois,aqui depois disso é feito
//uma conexão com o banco de dados,feita por um PDO(PHP Data Object) 
//para acessar alguns SGBDs(Um Sistema de Gerenciamento de Banco de Dados).
function __construct() 
{
    //mostra qual servidor do banco de dados vai ser utilizado e qual porta.
    $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
    //qual nome do user vai ser utilizado
    $user = "root";
    // e aqui qual a senha
    $pass = "etecjau";
    //fazendo a conexão e guardado ela no lugar na qual ele deferia estar
    $this->conexao = new PDO($dsn, $user, $pass);
}


//pode se perceber que aqui trata de um método que herda um model 
//e tambem puxa suas informações para que depois ele seja inserido no insert
//nos campos que equivale no model.
function insert(ProdutoModel $model) 
{
    //aqui fica um pedacinho do código do banco com os pontos de interrogação
    // que depois eles vão ser usado cada um no seu devido lugar na estrutura abaixo
    $sql = "INSERT INTO produto 
            (nome, descricao, codigo, estoque, fornecedor, categoria, data_entrada) 
            VALUES (?, ?, ?, ?, ?, ?, ? )";
    

    //variável stmt que que vai ter o preparo da consulta,ele  é feito também 
    //no mesmo lugar ques esta a conexão  com MySQL,sendo feito 
    //pela seta,logo pode se ver está sendo feito dentro da  propriedade
    // da $conexao com a string acima
    $stmt = $this->conexao->prepare($sql);

    // os bindValue serão usados para os valores ganhos e modifica em 
    //algum lugar um determinado valor (EX.o número 7 da lista abaixo )
    // e vai ser substituído pelo marcador do número correspondente lá em cima
    //assim mostrando qual posição correta os dados da model deve ficar
    //$stmt->bindValue(1, $model->idproduto);
    $stmt->bindValue(1, $model->nome);
    $stmt->bindValue(2, $model->descricao);
    $stmt->bindValue(3, $model->codigo);
    $stmt->bindValue(4, $model->estoque);
    $stmt->bindValue(5, $model->fornecedor);
    $stmt->bindValue(6, $model->categoria);
    $stmt->bindValue(7, $model->data_entrada);
    
    //ao longo disso tudo chega aonde vai rotar a consulta
    $stmt->execute();      
}
public function update(ProdutoModel $model )
    {
         $sql = "update protudo SET nome=?, descricao=? , codigo=?, estoque=?, fornecedor=?, categoria=?, data_entrada=? WHERE id=?";
    
         $stmt = $this->conexao->prepare($sql);
         $stmt->bindValue(1, $model->nome);
         $stmt->bindValue(2, $model->descricao);
         $stmt->bindValue(3, $model->codigo);
         $stmt->bindValue(4, $model->estoque);
         $stmt->bindValue(5, $model->fornecedor);
         $stmt->bindValue(6, $model->categoria);
         $stmt->bindValue(7, $model->data_entrada);
         $stmt->bindValue(8, $model->id);
         $stmt->execute(); 
    }   
    //vai funcionar  para selecionar algumas coisas,tipo um nome
         public function select()
         {
             $sql = "SELECT * FROM produto ";
     
             $stmt = $this->conexao->prepare($sql);
             $stmt->execute();
     
             return $stmt->fetchAll(PDO::FETCH_CLASS);        
         }
     //vai selecionar um id de alguma coisa
         public function selectById(int $id)
         {
             include_once 'Model/ProdutoModel.php';
     
             $sql = "SELECT * FROM produto WHERE id = ?";
     
             $stmt = $this->conexao->prepare($sql);
             $stmt->bindValue(1, $id);
             $stmt->execute();
     
             return $stmt->fetchObject("ProdutoModel"); 
         }
     
     
     // vai ter a funçãode deletar  o "arquivo"
         public function delete(int $id)
         {
             $sql = "DELETE FROM produto WHERE id = ? ";
     
             $stmt = $this->conexao->prepare($sql);
             $stmt->bindValue(1, $id);
             $stmt->execute();
         }
     }

