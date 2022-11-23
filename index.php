<?php
    include_once('conexao.php');
    $query = "SELECT * FROM categorias";
    $resultado = $conexao->prepare($query);
    $resultado->execute();

    $tarefas = [];
    $tarefas = $resultado->fetchAll();
    //print_r($tarefas);
    //if(count($tarefas)>0){
    //    foreach($tarefas as $registro){
           // echo $registro["id"]."<br>";
            //echo $registro["categoria"]."<br>";
        //}
   // }
?> 

<form action="#" method="get">
<fieldset>
   <legend>Tipo de Listagem HTML</legend> 
    
<select name="categoria" id="">
        <?php if(count($tarefas) > 0 ) {
            foreach($tarefas as $registro){ ?>

        <option value="<?php echo $registro["id"]."<br>"; ?>">
            <?php echo $registro["categoria"]."<br>"; ?>
        </option>
<?php }}?>
</select>
    <input type="submit" value="Enviar">
</fieldset>
</form>