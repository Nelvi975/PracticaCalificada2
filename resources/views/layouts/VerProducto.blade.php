<?php
<table border="1" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Cantidad</th>
        <th>Nombres</th>
        <th>Precio</th>
        <th>Calidad</th>
        <th>&nbsp;</th>
    </tr>
<?php
    foreach($producto as $producto){
        echo "<tr>".
            "<td>".$producto->id."</td>".
            "<td>".$producto->Cantidad."</td>".
            "<td>".$producto->Nombres."</td>".
            "<td>".$producto->Precio."</td>".
            "<td>".$producto->Calidad."</td>".
            /*"<td><a href='Ver/".$producto->id."/edit'>Ver</a></td>".*/
            "<td>".
"<form method='get' action='prodcuto/".$producto->id."/edit'>
                <input type='submit' value='VerProducto'>";
?>
@csrf
<?php
echo "</form>
"</td>".
        "</tr>";
    }
    ?>
</table>
