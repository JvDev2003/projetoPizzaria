<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/01c87f6c0d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/registrar.css">
</head>
<body>
    <main>
    <?php require './elements/menu.view.php'; ?>
        <section class="banner">
            <div class="overlay">
                <h2>Registre-se</h2>
                <form method="post" action="php/realizaCadastro.php">
                    <fieldset class="dados">
                        <label for="nome">
                            Nome:
                            <input type="text" name="nome" id="nome" placeholder="seu nome" />
                        </label>
                        <label for="email">
                            email:
                            <input type="email" name="email" id="email" placeholder="exemplo@email.com" />
                        </label>
                        <label for="cpf">
                            CPF:
                            <input type="number" name="cpf" id="cpf" placeholder="000.000.000-00" />
                        </label>
                        <div class="senhas">
                            <label for="senha">
                                Senha:
                                <input type="password" name="senha" id="senha" placeholder="**********" />
                            </label>
                            <label for="confirm-senha">
                                Confimar senha:
                                <input type="password" name="confirm-senha" id="confirm-senha" placeholder="**********" />
                            </label>
                        </div> 
                    </fieldset>
                    <fieldset class="endereco">
                        <h3>Endereço</h3>
                        <label for="rua">
                            Rua:
                            <input type="text" name="rua" id="rua" placeholder="R. ruaX" />
                        </label>
                        <label for="numero">
                            Numero:
                            <input type="number" name="numero" id="numero" placeholder="39" />
                        </label>
                        <label for="cep">
                            CEP:
                            <input type="number" name="cep" id="cep" placeholder="00000-000" />
                        </label>
                    </fieldset>
                    <div>
                        <input type="submit" value="Criar conta" />
                    </div>
                </form>
            </div>
            <img src="./images/feche-a-pizza-italiana-sobre-o-queijo-cole-o-foco-seletivo-generativo-ai.jpg">
            </div><!--overlay-->
        </section><!--banner-->
    </main>
</body>
</html>