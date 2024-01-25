<h1>Listado de Clientes</h1>
<table>
     <tr> <th>Código producto</th> <th>Nombre</th><th>Cantidad En Stock</th> </tr>
     <?php
     $productos = $data['productos'];
     foreach($productos as $producto) {
        print "<tr>
           <td>".$producto['CodigoProducto']."</td>
           <td>".$producto['Nombre']."</td>
           <td>".$producto['CantidadEnStock']."</td>
        </tr>";
     }
     ?>
</table>