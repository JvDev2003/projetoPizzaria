<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/01c87f6c0d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
    <main>
    <?php require './elements/menu.view.php'; ?>
        <section class="banner">
            <div class="overlay">
                <h1>Melhor Pizzaria da região</h1>
                <p>temos todos os sabores que vão matar sua fome!</p>
            </div>
            <img src="./images/feche-a-pizza-italiana-sobre-o-queijo-cole-o-foco-seletivo-generativo-ai.jpg">
            </div><!--overlay-->
        </section><!--banner-->
        <section class="content">
            <div class="topic left">
                <div class="text">
                    <h2>Entrega</h2>
                    <p>Com nossos entragadores a sua pizza chega em menos de 15 minutos depois de pronta.</p>
                </div>
                <div class="img">
                    <i class="fa-solid fa-car"></i>
                </div>
            </div><!--Topic-left-->
            <div class="topic right">
                <div class="text">
                    <h2>Satisfação</h2>
                    <p>Sua satisfação é nossa prioridade, então por favor sempre nos avalie.</p>
                </div>
                <div class="img">
                    <i class="fa-regular fa-face-smile"></i>
                </div>
            </div><!--topic-right-->
            <div class="topic left">
                <div class="text">
                    <h2>Valor</h2>
                    <p>Valores justos e acessiveis para caber no bolso de qualquer pessoa.</p>
                </div>
                <div class="img">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                </div>
            </div><!--Topic-left-->
        </section><!--content-->
        <footer>
            <div class="form-container">
                <h2>Nós Avalie</h2>
                <form action="" method="post">
                    <label for="nome">
                        <span>Nome</span>
                        <input type="text" name="nome" id="nome" placeholder="Fulano"/>
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" id="email" placeholder="exemplo@email.com"/>
                    </label>
                    <label for="comentario">
                        <span>Comentario</span>
                        <textarea name="comentario" id="comentario" placeholder="Seu comentario">

                        </textarea>
                    </label>
                    <input type="submit" value="Enviar">
                </form>
            </div><!--form-container-->
            <div class="footer">
                <p>@exemplo.com</p>
                <p>R: rua X, 40</p>
                <p>Exemplo@email.com</p>
            </div><!--footer-->
        </footer>
    </main>
</body>
</html>