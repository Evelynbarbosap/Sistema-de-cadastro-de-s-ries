<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/series/index.css" rel="stylesheet" type="text/css"/>
    <link href="/series/create.css" rel="stylesheet" type="text/css"/>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src = "http://demo.itsolutionstuff.com/plugin/jquery.js" > </script>
    <link rel = "stylesheet" href = "http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css" >
    <title>Séries</title>
</head>
<body id="body">
@include('notification')
    <div class="jumbotrom text-center">
        <h1>@yield('cabecalho')</h1>
    </div>
    @yield('conteudo')
    <div class="col-sm-12 pt-3 text-center">
        <p>
            Desenvolvido por
            <a class="footer" href="https://www.linkedin.com/in/evelyn-barbosa-63310a157/" target="_blank">Evelyn Barbosa.</a>
            <a class="footer" href="https://www.linkedin.com/in/evelyn-barbosa-63310a157/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a class="footer" href="https://github.com/Evelynbarbosap" target="_blank"><i class="fab fa-github"></i></a>
        </p>
    </div>
</body>
</html>
