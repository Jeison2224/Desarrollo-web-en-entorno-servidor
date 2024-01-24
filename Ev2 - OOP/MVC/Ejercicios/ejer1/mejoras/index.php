<?
  // Este es el controlador.

  // Conectamos a la BD y sacamos la lista de artículos
  $db = new mysqli("localhost", "jardinero", "jardinero, jardineria");
  $res = $db->query('SELECT * FROM clientes');

  // Convertimos la lista de artículos, que es un cursor de MySQL, en un array estándar de PHP
  $clientes = array();
  while ($row = $res->fetch_array())  {
      $clientes[] = $row;
  }
  $db->close();

  /* Incluimos el código de la vista, donde se usará el array de artículos
   para generar la tabla HTML.*/

  include('showAll.php');
?>