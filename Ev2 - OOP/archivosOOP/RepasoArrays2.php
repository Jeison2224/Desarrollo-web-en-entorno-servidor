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
        <h1></h1>
    </header>
    <section>
        <nav></nav>
        <main>
            <?php
                $zonas=array("Morata"=>array("Peña del reloj","Puente de roca","La gran placa"), "Riglos"=>array("Fire","Pisón","Mallo colorao"));

                $vias=array("Traslosbares","Pasteles","Limauñas","Anisdelmono","KakadeLuxe","Alocochinojabalín");

                $dificultad=array("6a","8a","7a","7b","V+","6b");

                $tabla=array();
                $c = 0;
                foreach ($zonas as $array) {
                    foreach ($array as $modelo) {
                        foreach ($vias as $value) {
                            foreach ($dificultad as $value2) {
                                $tabla[$modelo][$value]=$value2[$c];
                            }
                            $c++;
                        }

                    }
                }
                /*echo "<prev>";
                print_r($tabla);
                echo "</prev>";*/
                $i = 0;
                /*foreach ($tabla as $key => $value) {
                    echo $key;
                    $i++;
                }*/
            ?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>