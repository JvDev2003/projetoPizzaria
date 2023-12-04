<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/01c87f6c0d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav>
        <div class="logo">
            <i class="fa-solid fa-pizza-slice"></i>
            <h2>Pizzaria</h2>
        </div><!--logo-->
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/cardapio">Cardapio</a></li>
                <li><a href="/sistema">Sistema</a></li>
                <li><a href="/funcionario">Funcionários</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/logout"><?php /*Sessao::getUsername()*/ ?><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <script src="js/script.js"></script>
</body>
</html>