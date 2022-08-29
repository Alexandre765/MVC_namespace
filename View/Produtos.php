<form method="post" action="/info">
<label for="idproduto">Id do Produto:</label>   
 <input id="idproduto" name="idproduto" type="numer" /> <br />
 
 <label for="nome">Nome do Produto:</label>
    <input id="nome" name="nome" type="text" /> <br />

    <label for="descricao">Descriçâo do Produto:</label>
    <input id="descricao" name="descricao" type="text" /> <br />
    
    <label for="codigo">codigo do Produto:</label>
    <input id="codigo" name="codigo" type="text" /> <br />

    <label for="estoque">estoque minimo e maximo:</label>
    <input id="estoque" name="estoque" type="text" /> <br />
   
    <label for="fornecedor">Fornecedor:</label>
    <input id="fornecedor" name="fornecedor" type="text" /> <br />

    <label for="categoria">Tipo da categoria do Produto:</label>
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
</form>