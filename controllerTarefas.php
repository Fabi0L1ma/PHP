<?php 

    require "./entidades/Tarefa.php";
    require_once "./entidades/Conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == "inserir"){
        $conexao = new Conexao();

        $tarefa = $_POST['tarefa'];
        $categoria = $_POST['categoria'];
        $responsavel = $_POST['responsavel'];
    
        $tarefa = new Tarefa($conexao, $tarefa, $categoria, $responsavel, "", "", "", "", "");
        $tarefa->inserir();

        header('Location: ./cadastroTarefa.php');

    }else if($acao == "recuperar"){
        $conexao = new Conexao();

        $tarefa = new Tarefa($conexao, "","","","","","","","");

        $tarefas = $tarefa->visualizar();

    }else if($acao == "atualizar"){

        date_default_timezone_set('America/Sao_Paulo');
        $horario = date('Y-m-d H:i');

        $conexao = new Conexao();

        $status = $_POST['status'];


        if($status == "Iniciado"){
            $tarefa = new Tarefa($conexao,"","","", $status, $horario,"","","");
            
            $tarefa->__set("id", $_POST['id']);
            
            if($tarefa->buscarStatus() == "Pendente" or $tarefa->buscarStatus() == "Pausado"){
                $tarefa->atualizarStatus($status);
                header('Location: visualizarTarefa.php');
            }else{
                header('Location: visualizarTarefa.php?inclusao=0&id=' . $tarefa->__get('id'));
            }

        }else if($status == "Pausado"){
            $tarefa = new Tarefa($conexao,"","","", $status, "", $horario,"","");

            $tarefa->__set("id", $_POST['id']);
            
            if($tarefa->buscarStatus() == "Iniciado"){
                $tarefa->atualizarStatus($status);
                header('Location: visualizarTarefa.php');
            }else{
                header('Location: visualizarTarefa.php?inclusao=1&id=' . $tarefa->__get('id'));
            }

        }else if($status == "Finalizado"){
            $tarefa = new Tarefa($conexao,"","","", $status, "", "", $horario, ""); 

            $tarefa->__set("id", $_POST['id']);
            
            if($tarefa->buscarStatus() == "Iniciado"){
                $tarefa->atualizarStatus($status);
                header('Location: visualizarTarefa.php');
            }else{
                header('Location: visualizarTarefa.php?inclusao=2&id=' . $tarefa->__get('id'));
            }
        }

        $tarefa->tempoGasto();
    }
?>