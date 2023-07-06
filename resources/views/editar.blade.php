
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App de Finanças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Finanças Pessoais</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/despesas">Despesas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Receitas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">Saldo</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">


        <div class="row mt-4">
            <div class="col-lg-4">

                <form action="editarregisto/{{ $transacao->id }}" method="post">
                    @csrf
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Descrição" name="descricao" value="{{ $transacao->descricao }}">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="number" placeholder="Valor" name="valor" value="{{ $transacao->valor }}">
                        </div> 
 
                        
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="tipo">
                                <option value="Despesa" @if ($transacao->tipo == "Despesa") selected @endif>Despesa</option>
                                <option value="Receita" @if ($transacao->tipo == "Receita") selected @endif>Receita</option> 
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-lg" >Editar Transação</button>

                        </div>
                    </div>
                    
                </form>

                

 
            <div class="col-lg-8">

                


            </div>
        </div>

    </div>


</body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</html>