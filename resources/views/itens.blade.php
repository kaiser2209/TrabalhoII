<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <title>Programação WEB II - Trabalho</title>
    <style>
        body {
            margin: 25px;
        }
    </style>
</head>
<body>

    <h1>{{$titulo}}</h1>

    <table class="table table-hover table-dark">
        <tr>
            <th>{{$subtitulo}}</th>
        </tr>
            @forelse ($produtos as $produto)
                <tr><td>{{$produto}}</td></tr>
            @empty
                <tr><td>Não há produtos cadastrados</td></tr>
            @endforelse

    </table>
</body>
</html>
