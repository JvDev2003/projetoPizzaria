<main>
    <section class="banner">
        <div class="overlay">
            <h2>Registre-se</h2>

            <form method="post" action="/registrar" id="registrar">
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