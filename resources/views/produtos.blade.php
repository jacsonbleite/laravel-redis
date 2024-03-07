<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        .main{
            max-width: 600px;
            width: 100%;
            margin: auto;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="main">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <td scope="col">ID</td>
                    <td scope="col">Produto</td>
                    <td scope="col">Categorias</td>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <th scope="row">{{$produto->id}}</th>
                        <td>{{$produto->nome}}</td>
                        <td>
                            <ul>
                                @foreach($produto->categorias as $categoria)
                                <li>{{$categoria->nome}}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>