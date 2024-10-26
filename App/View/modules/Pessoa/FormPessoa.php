<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }
        h1 {
            margin-bottom: 40px;
        }
        label {
            color: #333;
        }
        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px;
        }
        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px;
        }
        .card {
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mt-5">
            <h1>Cadastro de Pessoa</h1>
        </div>

        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body">
                        <form method="post" action="/pessoa/form/save">

                            <input type="hidden" value="<?= $model->id ?>" name="id" />

                            <div class="form-group mb-3">
                                <label for="nome">Nome:</label>
                                <input id="nome" name="nome" type="text" value="<?= $model->nome ?>" class="form-control" required placeholder="Digite seu nome"/>
                            </div>

                            <div class="form-group mb-3">
                                <label for="cpf">CPF:</label>
                                <input id="cpf" name="cpf" type="number" value="<?= $model->cpf ?>" class="form-control" required placeholder="Digite seu CPF"/>
                            </div>

                            <div class="form-group mb-3">
                                <label for="data_nascimento">Data de Nascimento:</label>
                                <input id="data_nascimento" name="data_nascimento" type="date" value="<?= $model->data_nascimento ?>" class="form-control" required/>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-send">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
