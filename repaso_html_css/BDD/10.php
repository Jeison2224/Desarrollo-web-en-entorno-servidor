<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //conexion a la base de datos
        $cone = mysqli_connect   ("localhost", "root", "")
        or die ("no se pudo conectar");

        mysqli_select_db ($cone, "jardineria")
        or die ("no se pudo seleccionar la bbdd");

        $sql="CREATE TABLE usuarios(
            nombre varchar(50) NOT NULL,
            clave varchar(256) NOT NULL,
            PRIMARY KEY (nombre)
            ) engine=innodb;";

        if  (mysqli_query($cone,$sql))
            echo "Se ha creado la tabla";
        else
            echo "Error";

        $usuarios=array("jardinero"=>"jardinero","cristina"=>"cristina","enrique"=>"enrique","marta"=>"marta");
        $test=array("jardinero"=>"jardinero","cristina"=>"cristinaa","enrique"=>"enriquE","marta"=>"marta");

        foreach ($usuarios as $key => $pass) {
            $passPe = hash_hmac("sha256", $pass, $key);
            $passEn = password_hash($pass, PASSWORD_DEFAULT);
            $inse = "INSERT INTO usuarios VALUES ('$key', '$passEn')";

            if  (mysqli_query($cone,$inse))
            echo "Se ha añadido a $key a la tabla <br>";
            else
            echo "Error";

        }

        //pruebas con contraseñas
        foreach ($test as $key => $pass) {
            $passPe = hash_hmac("sha256", $pass, $key);
            $passEn = get_pwd_from_db($pass);
            if (password_verify($pass, $passEn)) {
                echo "Password matches. <br>";
            }
            else {
                echo "Password incorrect. <br>";
            }
        }



    ?>
</body>
</html>