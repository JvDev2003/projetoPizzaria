@extends('app')

@section('content')

<main id="container">
    <section class="banner">    
        <div class="overlay" id="login">
            <h2>Login</h2>
            <form method="POST" action="login" id="loginForm">
            @csrf
            <div id="alertLogin"></div>
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
                <a href="/registrar">registre-se aqui!</a>
            </form>
        </div>
        <img src="./images/feche-a-pizza-italiana-sobre-o-queijo-cole-o-foco-seletivo-generativo-ai.jpg">
        </div><!--overlay-->
    </section><!--banner-->
</main>

@endsection