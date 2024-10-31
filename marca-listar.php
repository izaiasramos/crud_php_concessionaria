<h1>Listar Marca</h1>
<?php

$sql = "SELECT * FROM marca";
$resultado = $conn->query($sql);
$quantidade = $resultado->num_rows;

if($quantidade > 0){
    print "<p>Encontrou <b>$quantidade</b> resultado(s)</p>";
    print "<table>";
        while($row = $resultado->fetch_object()){//fetch_object - busca/puxa os objetos/resultados no banco
            print "<tr>";
                    print "<td>".$row->id_marca."</td>";
                    print "<td>".$row->nome_marca."</td>";
            print "</tr>";
        }
    print "</table>";
}else{
    print "Não foi encontrado resultados.";
}