<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Cadastro de Usuario</h3>
                <form action="cadastrousuario.php" method="GET">
                    <label> Nome Completo</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome "><br><br>

                    <label> CPF</label>
                    <input type="text" class="form-control" name="cpf" placeholder="CPF"><br><br>

                    <label> RG</label>
                    <input type="text" class="form-control" name="rg" placeholder="RG"><br><br>

                    <label> Endereço</label>
                    <input type="text" class="form-control" name="endereço" placeholder="Endereco"><br><br>


                    <button class="btn btn-primary"> Cadastro Usuario</button>
                </form>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>