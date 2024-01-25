<h1>Listado de Clientes</h1>
<table>
     <tr> <th>Codigo</th> <th>Nombre</th><th>Contacto</th> </tr>
     <?php
     $clientes = $data['clientes'];
     foreach($clientes as $cliente) {
        print "<tr>
           <td>".$cliente['CodigoCliente']."</td>
           <td>".$cliente['NombreCliente']."</td>
           <td>".$cliente['NombreContacto']."</td>
        </tr>";
     }
     ?>
</table>