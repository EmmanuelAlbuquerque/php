<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Cadastro de produtos</h3>
                <form action="cadastraproduto.php" method="POST">
                    <label> Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder="Nome"><br><br>

                    <label> Preço</label>
                    <input type="text" class="form-control" name="precoproduto" placeholder="Preço"><br><br>

                    <label> Quantidade</label>
                    <input type="text" class="form-control" name="quantidadeproduto" placeholder="Quantidade"><br><br>


                    <button class="btn btn-primary"> Cadastro Produto</button>
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