<?php 

    try{
        echo "<h3> Try </h3>";

        //$sql = "Select * from clientes";
        //mysql_query($sql);

        if(!file_exists("require_arquivo_a.php")){
            throw new Exception("O arquivo não estava disponivel"); // OU error no lugar de EXCEPTION
        }

    }catch(Error $e){
        echo "<h3> Catch </h3>";
        echo '<p style="color: red">' . $e . "</p>";

    }catch(Exception $e){
        echo '<p style="color: red">' . $e . "</p>";

    }

?>