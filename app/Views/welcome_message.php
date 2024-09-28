<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tienda de Productos de Limpieza</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon2.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        :root {
            --primary: #049e77;
            --secondary: #05e2d4;
            --light: #c6ece8;
            --dark: #045173;
            --naivy-blue: #050a30;
            --blue-gray: #d9e4ec;
        }

        * {
            transition: background-color 300ms ease, color 300ms ease;
        }

        *:focus {
            /* background-color: rgba(221, 72, 20, .2); */
            background-color: var(--primary);
            outline: none;
        }

        html,
        body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }

        .menu {
            padding: .4rem 2rem;
        }

        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }

        header li {
            display: inline-block;
        }

        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }

        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: var(--secondary);
            color: var(--naivy-blue);

        }

        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }

        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }

        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: var(--secondary);
            color: var(--naivy-blue);
        }

        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
            background-color: var(--secondary);
        }

        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }

        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }

        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }

        .banner {
            background-image: url('/bg3.jpg');
            background-size: cover;
            background-position: bottom;
        }

        section h1 {
            margin-bottom: 2.5rem;
        }

        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }

        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        section code {
            display: block;
        }

        section a {
            color: var(--primary);
        }

        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }

        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }

        .further h2:first-of-type {
            padding-top: 0;
        }

        .svg-stroke {
            fill: none;
            stroke: #000;
            stroke-width: 32px;
        }

        footer {
            /* background-color: rgba(221, 72, 20, .8); */
            background-color: var(--secondary);
            text-align: center;
        }

        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }

        footer .copyrights {
            background-color: var(--naivy-blue);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }

        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }

            header .menu-toggle {
                padding: 0 1rem;
            }

            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }

            header .menu-toggle {
                display: block;
            }

            header .hidden {
                display: none;
            }

            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }

            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <div class="menu">
            <ul>
                <li class="logo"><a href="https://codeigniter.com" target="_blank"><img src="/logo-ilje.png" alt="" height="60"></a></li>
                <li class="menu-toggle"><button id="menuToggle">&#9776;</button></li>
                <li class="menu-item hidden"><a href="#">Inicio</a></li>
                <li class="menu-item hidden"><a href="" target="">Quienes somos</a></li>
                <li class="menu-item hidden"><a href="" target="">Productos</a></li>
                <li class="menu-item hidden"><a href="" target="">Contacto</a></li>
                <li class="menu-item hidden"><a href="<?= base_url('dashboard') ?>" target="">Vendedores</a></li>
            </ul>
        </div>

        <div class="heroe">

            <!-- <h1>Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1> -->
            <h1>ILJE GREEN</h1>
            <h2>Productos de limpieza</h2>

        </div>

    </header>

    <!-- CONTENT -->

    <section class="banner">

        <h1>ilse</h1>

    </section>

    <div class="further">

        <section>


            <p>
                Proveedores de productos de limpieza SG PROVEEDORES. Dedicados al suministro de artículos de limpieza institucional para usos del sector industrial y comercial.
            </p>
            <p>
                Contamos con la más grande variedad de artículos para oficinas, cafeterías y restaurantes, clínicas y hospitales, escuelas, industria y manufactura
            </p>

        </section>

        <section>
            <div>
                <h2>Asesoría personalizada</h2>
                <p>Cuéntanos cuáles son tus necesidades y nuestros asesores te ayudaran</p>
            </div>
            <div>
                <h2>Envíos rápidos a domicilio</h2>
                <p>Envío gratis en compras superiores a $ 10,000 *aplican restricciones</p>
            </div>
            <div>
                <h2>Pagos fáciles y seguros</h2>
                <p>Aceptamos Tarjetas de Crédito, Paypal y Transferencias Bancarias</p>
            </div>
        </section>

    </div>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>
        <div class="environment">

            <!-- <p>Page rendered in {elapsed_time} seconds</p> -->

            <!-- <p>Environment: <?= ENVIRONMENT ?></p> -->
            <p>Síguenos en redes sociales</p>
            <div>

            </div>

            <h3>CONTÁCTANOS</h3>
            <p><strong>Teléfono: 834 247 6604</strong></p>
            <p><strong>WhatsApp: 834 247 6604</strong></p>

        </div>

        <div class="copyrights">

            <p>&copy; <?= date('Y') ?> Desarrollado por Yurich</p>

        </div>

    </footer>

    <!-- SCRIPTS -->

    <script {csp-script-nonce}>
        document.getElementById("menuToggle").addEventListener('click', toggleMenu);

        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>

    <!-- -->

</body>

</html>