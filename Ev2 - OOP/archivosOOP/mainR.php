<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Calculadora racional</title>
    <link rel="stylesheet" type="text/css" href="estilo1.css">
	<link rel="stylesheet" type="text/css" href="estilo2.css"/>
</head>
<body>
    <header>
        <h1>CALCULADORA RACIONAL</h1>
    </header>
    <section>
        <nav></nav>
        <main>
            <?php
                require_once("Racional.php");
                if ($_REQUEST) {

                }
                else {
                    ?>
                    <fieldset class="reglas">
                        <tr>
                            <th>Reglas de uso de la calculadora</th>
                        </tr>
                        <tr>
                            <td>
                                <ul class="lista1">
                                    <li>
                                        La calculadora se usa escribiendo la operación completa.
                                    </li>
                                    <li>
                                        La operacion sera Operando_1 operacion Operando_2.
                                    </li>
                                    <li>
                                        Cada operando puede ser un número positivo entero o racional.
                                    </li>
                                    <li>
                                        Los operadores racionales permitidos son +-*:
                                    </li>
                                    <li>
                                        No se deben dejar espacios en blanco entre operandos y operación.
                                    </li>
                                    <li>
                                        Ejemplo:
                                        <ul class="lista 2">
                                            <li>
                                                5+4
                                            </li>
                                            <li>
                                                5/2:2
                                            </li>
                                            <li>
                                                1/4*2/3
                                            </li>
                                            <li>
                                                2/7:1/3
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </fieldset>

                    <?php
                }
            ?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>