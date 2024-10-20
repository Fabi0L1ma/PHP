<?php 
    $acao = "recuperar";

    require "controllerCategoria.php";
    require "controllerResponsavel.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>

    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <nav class="nav-cabecalho">
        <div class="box-cabecalho">
            <img src="imagens/lista.png" alt="">
            Gerenciador de Tarefas
        </div>
    </nav>

    <div class="box-app">
        <div class="box-selecao">
            <ul class="menu-tarefas">
                    <li class="item"><a href="cadastroTarefa.php">Cadastrar Tarefa</a></li>
                    <hr>
                    <li class="item"><a href="visualizarTarefa.php">Visualizar Tarefas</a></li>
                    <hr>
                    <li class="item"><a href="cadastroResponsavel.php">Cadastrar Responsavel</a></li>
                    <hr>
                    <li class="item"><a href="cadastroCategoria.php">Cadastrar Categoria</a></li>
                </ul>
        </div>
    
        <div class="box-tarefas">
            <div class="box-cabecalho-titulo">
                Cadastro Tarefas
            </div>
    
            <hr>
            <form action="controllerTarefas.php?acao=inserir" method="post">
            <div class="box-cadastros">
                <div class="box-inputs">
                    <label for="">Tarefa:</label>
                    <input type="text" name="tarefa">
                </div>
    
                <div class="box-inputs">
                    <label for="">Categoria:</label>
                    <select name="categoria" id="">
                        <option value="" disabled selected>Selecione</option>
                        <?php foreach($categorias as $categoria){?>
                            <option value="<?php echo $categoria->id?>"><?php echo $categoria->categoria?></option>
                        <?php }?>
                    </select>
                </div>
    
                <div class="box-inputs">
                    <label for="">Responsavel:</label>
                    <select name="responsavel" id="">
                        <option value="" disabled selected>Selecione</option>
                        <?php foreach($responsaveis as $responsavel){?>
                            <option value="<?php echo $responsavel->id?>"><?php echo $responsavel->nome?></option>
                        <?php }?>
                    </select>
                </div>
    
                <button class="bt-cadastrar">Cadastrar</button>
                
            </div>
            </form>
            
        </div>
    </div>
</body>
</html>