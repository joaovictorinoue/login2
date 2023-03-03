<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="col-md-6">
            <div class="header-title">
                <h2>Cadastro novo usuário</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-2">
                <form action="" method="post">
                    <div class="form-group">
                        <input name="text" id="nome" class="form-control" placeholder="Nome"><br>
                    </div>
                    <div class="form-group">
                        <input name="text" id="sobrenome" class="form-control" placeholder="Sobrenome"><br>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email"><br>
                    </div>
                    <div class="form-group">
                        <input type="number" name="telefone" class="form-control" placeholder="Telefone">
                    </div>
                </form>
            </div>
            <div class="col-md-6 mt-2">
                <form action="" method="post">
                    <div class="form-group">
                        <input name="text" id="senha" class="form-control" placeholder="Senha"><br>
                    </div>
                    <div class="form-group">
                        <input name="text" id="confirmarsenha" class="form-control" placeholder="Confirmar Senha"><br>
                    </div>
                    <div class="form-group">
                        <select class="form-select">
                            <option selected>Escolha uma das perguntas de segurança</option>
                            <option value="1">Em qual cidade você nasceu?</option>
                            <option value="2">Qual é o nome do seu animal de estimação?</option>
                            <option value="3">Qual é o seu apelido de infância?</option>
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <input type="number" name="telefone" class="form-control" placeholder="Telefone">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary w-50">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>