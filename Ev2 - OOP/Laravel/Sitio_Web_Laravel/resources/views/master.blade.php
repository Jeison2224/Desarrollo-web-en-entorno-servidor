<html>

    <head>
       <title>@yield('title')</title>
       <link rel="stylesheet" href="{{ asset('../public/css/estilo.css') }}">
    </head>
    <body>
        <header>
        </header>
        @section('sidebar')
        <section>
            <nav>
                <div class="container">
                    @yield('content')
                </div>
            </nav>
            <main>
            </main>
        </section>
        <footer></footer>
    </body>
</html>