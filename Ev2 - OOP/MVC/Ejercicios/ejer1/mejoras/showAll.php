<h1>Listado de Clientes</h1>
<table>
     <tr> <th>Codigo</th> <th>Nombre</th><th>Contacto</th> </tr>
     <?php
     $clientes = $data['clientes'];
     foreach($clientes as $cliente) {
        print "<tr>
           <td>".$cliente[0]."</td>
           <td>".$cliente[1]."</td>
           <td>".$cliente[2]."</td>
        </tr>";
     }
     ?>
</table>