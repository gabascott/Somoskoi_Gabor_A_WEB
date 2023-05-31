<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Somoskői Gábor</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Links -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script type="module" src="{{ url('js/main.js') }}"></script>
    </head>
    <body class="antialiased">
        <main>
            <header>
                <h2>Tesztkérdések</h2>
            </header>
            <article class="teszt_container">
                <select class="kategoriak">
                    
                </select>
            </article>
        </main>
    </body>
</html>
