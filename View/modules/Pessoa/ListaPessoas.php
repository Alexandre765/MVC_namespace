<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de pessoas</title>
</head>
<body>
<table>
    <tr>
        <th></th>
        <th>id</th> 
        <th>nome</th>
        <th>cpf</th>
        <th>data_nascimento</th>
        <th>rg</th>
        <th>email</th>
        <th>Telefone</th>
        <th>endereco</th>

       
    </tr>
    
    <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/pessoa/delete?id=$item->id ?">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->cpf ?></td>
            <td><?= $item->data_nascimento ?></td>
            <td><?= $item->rg ?></td>
            <td><?= $item->email ?></td>
            <td><?= $item->telefone ?></td>
            <td><?= $item->endereco ?></td>
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