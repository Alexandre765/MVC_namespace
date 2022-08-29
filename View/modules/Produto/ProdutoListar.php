<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de produto</title>
</head>
<body>
<table>
    <tr>
        <th></th>
        <th>id</th> 
        <th>nome</th>
        <th>descricao</th>
        <th>Codigo</th>
        <th>estoque</th>
        <th>fornecedor</th>
        <th>Categoria</th>
        <th>data_entrada</th>

</tr>

<?php foreach($model->rows as $item): ?>
    <tr>
        <td>
            <a href="/produto/delete?id=$item->id ?">X</a>
        </td>

<td><?= $item->id ?></td>

<td>
    <a href="/produto/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
</td>

<td><?= $item->nome ?></td>
<td><?= $item->descricao ?></td>
<td><?= $item->codigo ?></td>
<td><?= $item->estoque ?></td>
<td><?= $item->fornecedor ?></td>
<td><?= $item->categoria ?></td>
<td><?= $item->data_entrada ?></td>
</tr>
<?php endforeach ?>

<?php if(count($model->rows) ==0): ?>
 <tr>
    <td colspan="5">nenhum registro encontado;</td>
 </tr>
   <?php endif ?>
</table>
</body>
</html>