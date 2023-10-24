
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
                <p>Com nossos entregadores, sua pizza chega em menos de 15 minutos depois de pronta!</p>
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
                <p>Valores justos e acessíveis para caber no seu bolso.</p>
            </div>

            <div class="img">
                <i class="fa-solid fa-hand-holding-dollar"></i>
            </div>

        </div><!--topic-left-->
    </section><!--content-->

    <footer>

        <div class="form-container">
            <h2>Nos Avalie!</h2>
            <!--form de feedback-->
            <form action=""  method="post"><!--TODO: criar função pra enviar feedback-->
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
                    <textarea name="comentario" id="comentario" placeholder="Seu comentário">

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