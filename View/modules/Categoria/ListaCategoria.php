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
        <th>descricao</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
            <tr>
                <td>
                    <a href="/categoria/delete?id=$item->id ?">X</a>
              </td>
              <td><?= $item->id ?></td>
              <td>
                  <a href="categoria/form?id=<?= $item->id ?>"><?= $item->descricao ?></a>
                  </td>

<td><?= $item->descricao ?></td>

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