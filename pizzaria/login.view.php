<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/01c87f6c0d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <main>
    <?php require './elements/menu.view.php'; ?>

        <section class="banner">
            
            <div class="overlay">
                <h2>Login</h2>
                <form method="post" action="php/efetuaLogin.php">

                    <label for="email">
                        <input type="email" name="email" id="email" placeholder="exemplo@email.com" required/>
                    </label>

                    <label for="senha">
                        <input type="password" name="senha" id="senha" placeholder="**********" required/>
                    </label>

                    <div>
                        <input type="submit" value="Entrar" />
                        <input type="reset" value="Limpar"/>
                    </div>

                    <a href="">esqueceu sua senha?</a>
                    <a href="registrar.view.php">registre-se aqui!</a>
                </form>
            </div>
            <img src="./images/feche-a-pizza-italiana-sobre-o-queijo-cole-o-foco-seletivo-generativo-ai.jpg">
            </div><!--overlay-->
        </section><!--banner-->
    </main>
</body>
</html>