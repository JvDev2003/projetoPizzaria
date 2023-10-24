<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/01c87f6c0d.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Pizzaria</title>
</head>
<body>
    <header>
        <nav>
        <div class="logo">
            <i class="fa-solid fa-pizza-slice"></i>
            <h2>Pizzaria</h2>
        </div><!--logo-->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cardapio.view.php">Cardapio</a></li>
                <li><a href="index.php?page=funcionarios">Funcionários</a></li>
                <li><a href="index.php?page=login">Login</a></li>
                <li><a href="php/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>
    <?php 
        $page = $_GET['page'] ?? ''; 
        
        switch ($page) {
            case '':
                require ('view/index.view.php');
            break;
            
            case 'login':
                require ('controller/login.controller.php');
            break;
            case 'registrar':
                require ('controller/registrar.controller.php');
            break;
            case 'funcionarios':
                require ('controller/funcionarios.controller.php');
            break;    
            default:      
        }
    ?>

    </php ?>
</body>
</html>