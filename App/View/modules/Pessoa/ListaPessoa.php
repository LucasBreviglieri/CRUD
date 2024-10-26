<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Lista de Pessoas</title>
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Lista de Pessoas</h1>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center"></th>
                    <th class="text-center">ID</th>
                    <th class="text-center">NOME</th>
                    <th class="text-center">CPF</th>
                    <th class="text-center">DATA DE NASCIMENTO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($model->rows as $item): ?>
                    <tr>

                        <td class="text-center">
                            <a href="/pessoa/delete?id=<?= $item->id ?>">X</a>
                        </td>

                        <td class="text-center"><?= $item->id ?></td>

                        <td class="text-center">
                        <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
                        </td>
                        
                        <td class="text-center"><?= $item->cpf ?></td>
                        
                        <td class="text-center"><?= $item->data_nascimento ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
