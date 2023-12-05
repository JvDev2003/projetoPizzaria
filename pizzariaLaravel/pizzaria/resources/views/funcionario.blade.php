@extends('app')

@section('content')

<main id="container">
    <section class="banner">
        <div class="overlay" id="login">
            <h2>Login para Funcionários</h2>
            <form method="post" action="funcionario">
                @csrf
                <div id="alertLogin"></div>
                <label for="email">

                    <input type="email" name="email" id="email" placeholder="exemplo@email.com" />
                </label>

                <label for="senha">
                    <input type="password" name="senha" id="senha" placeholder="**********" />
                </label>

                <div>
                    <input type="submit" value="Entrar" />
                    <input type="reset" value="Limpar"/>
                </div>
            </form>
        </div>
        <img src="./images/feche-a-pizza-italiana-sobre-o-queijo-cole-o-foco-seletivo-generativo-ai.jpg">
        </div><!--overlay-->
    </section><!--banner-->
</main>

@endsection
