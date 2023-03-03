<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="col-md-6 mt-5">
            <div class="header-title">
                <h2>Cadastro do Cliente</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="text" id="nome" class="form-control">
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-fill">
                            <label for="nome">CPF</label>
                            <input type="number" name="cpf" id="cpf" class="form-control">
                        </div>
                        <div class="flex-fill">
                            <label for="RG">RG</label>
                            <input type="number" name="rg" id="rg" class="form-control">
                        </div>
                        <div class="flex-fill">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" class="form-control">
                        </div>
                        <div class="flex-fill">
                            <label for="data">Data de Nascimento</label>
                            <input type="date" name="data" id="data" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <h4>Contatos</h4>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-fill">
                            <label for="celular">Celular</label>
                            <select class="form-select" name="celular" id="celular">
                                <option value="1">Celular</option>
                            </select>
                        </div>
                        <div class="flex-fill">
                            <label for="numero">Número</label>
                            <input type="number" name="numero" id="numero" class="form-control">
                        </div>
                        <div class="flex-fill">
                            <label for="outros">Outros</label>
                            <input type="text" name="outros" id="outros" class="form-control">
                        </div>
                        <div class="flex-mid-fill">
                            <label for="obs">Observações</label>
                            <input type="text" name="obs" id="obs" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-lg-fill">
                            <label for="select">Email</label><br>
                            <select class="form-select" name="select" id="select">
                                <option value="1">Email</option>
                            </select>
                        </div>
                        <div class="flex-fill">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="flex-mid-fill">
                            <label for="other">Outros</label>
                            <input type="text" name="other" id="other" class="form-control">
                        </div>
                        <div class="flex-mid-fill">
                            <label for="obs">Observações</label>
                            <input type="text" name="obs" id="obs" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-fill">
                            <label for="tel">Residêncial</label>
                            <select class="form-select" name="tel" id="tel">
                                <option value="1">Telefone</option>
                            </select>
                        </div>
                        <div class="flex-fill">
                            <label for="numero">Número</label>
                            <input type="number" name="numero" id="numero" class="form-control">
                        </div>
                        <div class="flex-fill">
                            <label for="outros">Outros</label>
                            <input type="text" name="outros" id="outros" class="form-control">
                        </div>
                        <div class="flex-mid-fill">
                            <label for="obs">Observações</label>
                            <input type="text" name="obs" id="obs" class="form-control">
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary w-45">Salvar</button>
                        <button type="submit" class="btn btn-primary w-45">Novo Cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>