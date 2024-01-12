<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Base</title>
    <link rel="stylesheet" type="text/css" href="estilo1.css">
	<link rel="stylesheet" type="text/css" href="estilo2.css"/>
</head>
<body>
    <header>
        <h1>CAIDA LIBRE</h1>
    </header>
    <section>
        <nav></nav>
        <main>
            <?php
            if ($_REQUEST){
                $h = $_GET["altura"];

                function tiempo($h){
                    $t = sqrt(2*$h/9,8);
                    return $t;
                }

                function velocidad($t){

                }

                function altura($h, $t){
                    $t1 = tiempo($h) * tiempo($h);
                    $h = $h - 1/2 * 9.8 * $t1;
                    return $h;
                }
            }
            else {
                ?>
                    <form action="" method="get">
                        <p>Escriba una altura entre 1 y 1000 mmetros para calcular la caida libre de un objeto:</p><br><br>
                        <input type="number" name="altura" id="altura">
                        <input type="submit" value="Calcular" name="calcular">
                    </form>
                <?php
            }
            ?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>