<h1>Listar Marca</h1>
<?php

$sql = "SELECT * FROM marca";
$resultado = $conn->query($sql);
$quantidade = $resultado->num_rows;

if($quantidade > 0){
    print "<p>Encontrou <b>$quantidade</b> resultado(s)</p>";
}else{
    print "Não foi encontrado resultados.";
}