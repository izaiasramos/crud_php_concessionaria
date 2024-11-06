<h1>Cadastrar Modelo</h1>
 
<form action="?page=modelo-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Marca</label>
        <select name="marca_id_marca" id="" class="form-control">
            <option>-- Escolha Marca --</option>
            <?php
                $sql = "SELECT * FROM marca";
                $resultado = $conn->query($sql);
                if($resultado->num_rows >0){
                    while($row = $resultado->fetch_object()){
                        print "<option value='".$row->id_marca."'>".$row->nome_marca."</option>";
                    }
                }else{
                    print "<option>Não há marcas cadastradas.</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Modelo</label>
        <input type="text" name="nome_modelo" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Cor</label>
        <input type="text" name="cor_modelo" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Ano</label>
        <input type="text" name="ano_modelo" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Placa</label>
        <input type="text" name="placa_modelo" class="form-control">
    </div>
    <div class="mb-3">
    <button class="btn btn-success">Enviar</button>  
    </div>
</form>