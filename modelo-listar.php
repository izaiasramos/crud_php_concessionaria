<h1>Listar Modelo</h1>
<?php
$sql = "SELECT mo.*, ma.nome_marca
FROM modelo AS mo
LEFT JOIN marca AS ma
ON mo.marca_id_marca = ma.id_marca";
//agora marca_id_marca do modelo vai receber id_marca
//da tabela marca, fazendo com que na lista aparece o nome da marca no campo nome_marca trazendo essa informação da tabela marca para a tabela modelo
$resultado = $conn->query($sql);

$quantidade = $resultado->num_rows;

if($quantidade > 0){
    print "<p>Encontrou <b>$quantidade</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
            print "<tr>";
                    print "<th>#</th>";
                    print "<th>Marca</th>";
                    print "<th>Modelo</th>";
                    print "<th>Cor</th>";
                    print "<th>Ano</th>";
                    print "<th>Placa</th>";
            print "</tr>"; 
    while($row = $resultado->fetch_object()){//fetch_object - busca/puxa os objetos/resultados no banco
            print "<tr>"; //ação javascript onclick redirecionando para a pagina que vai editar ou excluir,com barras invertidas para não dar erro nas aspas duplas
                    //&id_marca=".$row->id_marca." - passando o parametro que é o ID que será editado ou excluido, a $row que recebeu o acessso ao DB,acessa a linha daquele registro/marca do DB com o id_marca 
                    print "<pre>";
                    print_r($row); // Isso mostrará todos os dados retornados
                    print "</pre>";
                    print "<td>".$row->id_modelo."</td>";
                    print "<td>".$row->nome_marca."</td>";
                    print "<td>".$row->nome_modelo."</td>";
                    print "<td>".$row->cor_modelo."</td>";
                    print "<td>".$row->ano_modelo."</td>";
                    print "<td>".$row->placa_modelo."</td>";
                    
            print "<td>       
                                <button onclick=\"location.href='?page=modelo-editar&id_modelo=".
                                $row->id_modelo."';\" class='btn btn-primary'>Editar</button>
                              
                                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=modelo-salvar&acao=excluir&id_modelo=".
                                $row->id_modelo."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                          </td>";  //não podemos excluir direto
            print "</tr>";
        }
    print "</table>";
}else{
    print "Não foi encontrado resultados.";
}