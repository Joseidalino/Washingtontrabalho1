<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Login | Investindo</title>


    </head>
    <body>
        <section id="conteudo-view" class="login">
            <form class="" action="index.html" method="POST">
                    Usuário:
                    <input type="text" name="user">
                    Senha:
                    <input type="text" name="password">
                    <input type="submit" value="Entrar" />
            </form>
            <br>
            <form action="/" method="get">
                    <input type="submit" value="Página inicial" />
            </form>
        </section>
    </body>
</html>