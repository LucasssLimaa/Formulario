<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>


<body class="bg-light">

    <form action="salva.php" method="post">

        <div class="container">
            <main>
                <h5 class="mb-3 bg-success text-white p-2 text-center">MINI HORTA VERDE FELIZ</h5>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-2">
                            <label for="numero" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Ex: Jorge" value="" required>
                            <div class="invalid-feedback">
                                Insira um nome.
                            </div>
                        </div>

                        <div class="col-sm-1">
                            <label for="numero" class="form-label">N°</label>
                            <input type="text" class="form-control" name="numero" placeholder="Ex: 9" value="" required>
                            <div class="invalid-feedback">
                                Insira um número válido.
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <label for="data" class="form-label">Data</label>
                            <input type="date" class="form-control" name="data" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Insira uma data válida.
                            </div>
                        </div>

                        <div class="col-5">
                            <label for="firma" class="form-label">Firma</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" name="firma" placeholder="Ex: Firma do afirmativo" required>
                                <div class="invalid-feedback">
                                    Insira um nome de firma válido.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-7">
                                <label for="endereco" class="form-label">Endereço</label>
                                <input type="text" class="form-control" name="endereco" placeholder="Ex: Av. Lúcio Costa 3602" required>
                                <div class="invalid-feedback">
                                    Insira um endereço válido.
                                </div>
                            </div>

                            <div class="col-2">
                                <label for="complemento" class="form-label">Complemento <span class="text-muted">(Opcional)</span></label>
                                <input type="text" class="form-control" name="complemento" placeholder="Ex: 3602">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="estado" class="form-label">Estado</label>
                                <input class="form-control" name="estado" placeholder="Ex: Rio de Janeiro" required>
                                <div class="invalid-feedback">
                                    Insira um estado válida.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input class="form-control" name="cidade" placeholder="Ex: Niterói" required>
                                <div class="invalid-feedback">
                                    Insira uma cidade válida.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="bairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="bairro" placeholder="Ex: Pechincha" required>
                                <div class="invalid-feedback">
                                    Insira um bairro válido.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" name="cep" placeholder="Ex: 20050100" required>
                                <div class="invalid-feedback">
                                    Insira um CEP válido.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="cnpj" class="form-label">CNPJ</label>
                                <input type="text" class="form-control" name="cnpj" placeholder="Ex: 50.790.203/0001-05" required>
                                <div class=" invalid-feedback">
                                    Insira um CNPJ válido.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="inscricao" class="form-label">Inscrição</label>
                                <input type="text" class="form-control" name="inscricao" placeholder="Ex: 98742376109" required>
                                <div class="invalid-feedback">
                                    Insira uma inscrição válida.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" name="telefone" placeholder="Ex: 88724556" required>
                                <div class="invalid-feedback">
                                    Insira um telefone válido.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="text" class="form-control" name="celular" placeholder="Ex: 945749822" required>
                                <div class="invalid-feedback">
                                    Insira um celular válido.
                                </div>
                            </div>

                            <div class="col-5">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Ex: seunome@example.com">
                                <div class="invalid-feedback">
                                    Insira um email válido.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="data" class="form-label">OBS:</label>
                            <input type="text" class="form-control" name="obs" placeholder="Ex: Adorei esse serviço." value="" required>
                        </div>

                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <button class="w-100 btn btn-success btn-lg" type="submit">Cadastrar</button>
                    </div>
                </form>
        </div>
        </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017–2021 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
        </div>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="form-validation.js"></script>

    </form>
</body>

</html>