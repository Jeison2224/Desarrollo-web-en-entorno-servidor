<html>

    <head>
       <title>@yield('title')</title>
       <link rel="stylesheet" href="../public/estilo.css">
    </head>
    <body>
        <header>
            @yield('header')
        </header>
        <nav>
            @yield('nav')
        </nav>
        @section('sidebar')

        @show
        <section>
            <main>
                @yield('main')
                <div class="container">
                    @yield('content')
                </div>
            </main>
        </section>
        <aside>
            @yield('aside')
        </aside>
        <footer>
            @yield('footer')
        </footer>
    </body>
</html>