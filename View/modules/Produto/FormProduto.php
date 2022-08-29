<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Produtos</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/Produto/save" method="post">
        <fieldset>
            <legend>Id de produto</legend>


            <label for="nome">Nome</label>
            <input name="nome" id="nome" type="text" />

            <label for="descricao">Descriçao:</label>
            <input name="descricao" id="descricao" type="text" />

            <label for="codigo">Codigo de Barra:</label>
            <input name="codigo" id="codigo" type="text" />

            <label for="estoque">estoque minimo e maximo:</label>
            <input id="estoque" name="estoque" type="text" /> <br />

            <label for="fornecedor">Fornecedor:</label>
            <input id="fornecedor" name="fornecedor" type="text" /> <br />
           
            <label for="categoria">Categoria do Produto:</label>
            <select id="categoria" name="categoria">
           <option value="conveniencia">Conveniência</option>
           <option value="compras">Compras</option>
           <option value="especias">Especiais</option>
           <option value="pereciveis">Perecíveis </option>
          </select> <br />

    <label for="data_entrada">Data de entrada do Produto</label>
    <input id="data_entrada" name="data_entrada" type="date" /> 

    <label for="termos">Aceito os Termos</label>
    <input id="termos" name="termos" type="checkbox" /> Aceito tudo <br />
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>
