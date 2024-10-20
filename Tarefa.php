<?php
    class Tarefa{
        private $id;
        private $tarefa;
        private $categoria;
        private $responsavel;
        private $status;
        private $data_inicio;
        private $data_pausa;
        private $data_fim;
        private $totalTempoGasto;

        private $conexao;

        public function __construct(Conexao $conexao, $tarefa, $categoria, $responsavel, $status, $data_inicio, $data_pausa, $data_fim, $totalTempoGasto){
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
            $this->categoria = $categoria;
            $this->responsavel = $responsavel;
            $this->status = $status;
            $this->data_inicio = $data_inicio;
            $this->data_pausa = $data_pausa;
            $this->data_fim = $data_fim;
            $this->totalTempoGasto = $totalTempoGasto;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function inserir(){
            $query = "
            INSERT INTO tb_tarefa(tarefa, id_categoria, id_responsavel)
                VALUES(:tarefa, :categoria, :responsavel);
            ";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue(":tarefa", $this->__get('tarefa'));
            $stmt->bindValue(":categoria", $this->__get('categoria'));
            $stmt->bindValue(":responsavel", $this->__get('responsavel'));

            $stmt->execute();
            
        }

        public function visualizar(){
            $query = "
                select tb_tarefa.id, tb_tarefa.tarefa, tb_responsavel.nome, tb_categoria.categoria, tb_tarefa.inicio_tarefa, tb_tarefa.pausa_tarefa, tb_tarefa.fim_tarefa, tb_tarefa.status_tarefa, tb_tarefa.tempo_gasto
                    from tb_tarefa
                    inner join tb_responsavel
                    on tb_tarefa.id_responsavel = tb_responsavel.id
                    inner join tb_categoria
                    on tb_tarefa.id_categoria = tb_categoria.id;
            ";

            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function buscarStatus(){
            $query = "
            select * from tb_tarefa
                where id = :id;
        ";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue(":id", $this->__get('id'));

            $stmt->execute();

            $status_t = $stmt->fetch();

            return $status_t['status_tarefa']; /// alterar aquii
        }

        public function atualizarStatus($status){

            $query = "
            select * from tb_tarefa
                where id = :id;
            ";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue(":id", $this->__get('id'));

            $stmt->execute();

            $tarefa = $stmt->fetch();

            if($status == "Iniciado"){

                if( $tarefa['inicio_tarefa'] == null){
                    
                    $query = "
                        UPDATE tb_tarefa 
                            SET status_tarefa = :status , inicio_tarefa = :data_inicio
                                WHERE id = :id;
                    ";

                    $stmt = $this->conexao->prepare($query);

                    $stmt->bindValue(":id", $this->__get('id'));
                    $stmt->bindValue(":status", $this->__get('status'));
                    $stmt->bindValue(":data_inicio", $this->__get('data_inicio'));
    
                    return $stmt->execute();

                }else{

                    $query = "
                        UPDATE tb_tarefa 
                            SET status_tarefa = :status 
                                WHERE id = :id;
                    ";

                    $stmt = $this->conexao->prepare($query);

                    $stmt->bindValue(":id", $this->__get('id'));
                    $stmt->bindValue(":status", $this->__get('status'));
    
                    return $stmt->execute();

                }

            }else if($status == "Pausado"){
                $query = "
                    UPDATE tb_tarefa 
                        SET status_tarefa = :status, pausa_tarefa = :data_pausa
                            WHERE id = :id;
                ";

                $stmt = $this->conexao->prepare($query);

                $stmt->bindValue(":id", $this->__get('id'));
                $stmt->bindValue(":status", $this->__get('status'));
                $stmt->bindValue(":data_pausa", $this->__get('data_pausa'));

                return $stmt->execute();

            }else if($status == "Finalizado"){
                $query = "
                    UPDATE tb_tarefa 
                        SET status_tarefa = :status , fim_tarefa = :data_fim
                            WHERE id = :id;
                ";

                $stmt = $this->conexao->prepare($query);

                $stmt->bindValue(":id", $this->__get('id'));
                $stmt->bindValue(":status", $this->__get('status'));
                $stmt->bindValue(":data_fim", $this->__get('data_fim'));

                return $stmt->execute();
            }

        }

        public function tempoGasto(){

            $query = "
                select * from tb_tarefa
                    where id = :id;
            ";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue(":id", $this->__get('id'));

            $stmt->execute();

            $t = $stmt->fetch();

                $tempoSeg = 0;

                if ($t['incio_tarefa'] != null and $t['pausa_tarefa'] != null and $t['fim_tarefa'] == null) {
                    $tempoSeg = strtotime($t['pausa_tarefa']) - strtotime($t['inicio_tarefa']);

                } elseif ($t['inicio_tarefa'] != null and $t['pausa_tarefa'] != null and $t['fim_tarefa'] != null and $t['status_tarefa' == 'Iniciado']) {
                    $tempoSeg = (strtotime($t['fim_tarefa']) - strtotime($t['inicio_tarefa'])) - (strtotime($t['fim_tarefa']) - strtotime($t['pausa_tarefa']));

                } elseif ($t['fim_tarefa'] != null && $t['inicio_tarefa'] != null && $t['pausa_tarefa'] == null) {
                    $tempoSeg = strtotime($t['fim_tarefa']) - strtotime($t['inicio_tarefa']);
                }
            
                $this->totalTempoGasto = ($tempoSeg / 60) + $t['tempo_gasto'];
            
                $query = "
                    UPDATE tb_tarefa 
                    SET tempo_gasto = :tempo_gasto
                    WHERE id = :id;
                ";
            
                $stmt = $this->conexao->prepare($query);
                $stmt->bindValue(":id", $this->__get('id'));
                $stmt->bindValue(":tempo_gasto", $this->__get('totalTempoGasto'));
            
                return $stmt->execute();

        }
    }

?>