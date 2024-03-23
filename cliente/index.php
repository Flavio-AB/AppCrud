<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #8FBC8F;
        }
    </style>
</head>

<body>
    <center>
        <h1>CADASTRO DE CLIENTES</h1>
    </center>
    <hr />
    <br />
    <center><button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
            data-bs-target="#exampleModal"><b>CADASTRAR</b></button></center>
    <br />
    <main>
        <div class="container">
            <div class="row row=cols-2 row-cols-md-4 text-center">
                <div class="col-md-12">
                    <div class="card mb-4 rounded-3 shadow-sw">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    fill="green" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                </svg>&nbsp;&nbsp;<b>CLIENTES</b></h4>
                        </div>
                        <div class="card-body">
                            <?php
                            include 'cliente.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Clientes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action = "cadcli.php" method="post">
                           <label>Nome</label>
                           <input type="text" class="form-control" name="nome" required/>
                           <br/>
                           <label>Celular</label>
                           <input type="text" class="form-control" name="celular" required/>
                           <br/>
                           <label>E-mail</label>
                           <input type="email" class="form-control" name="email" required/>
                           <br/>
                           <button type="submit" class="btn btn-outline-success">CADASTRAR</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>