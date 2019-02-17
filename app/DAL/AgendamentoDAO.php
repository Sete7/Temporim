<?php

require_once 'Banco.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AgendamentoDAO {

    private $debug;
    private $pdo;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

//    CADASTRAMENTO PAINEL
    public function Cadastrar(Agendamento $agendamento) {
        try {
            $sql = "INSERT INTO agendamento (agenda_nome,agenda_email,categoria,tipopagamento,agenda_telefone,agenda_data,agenda_hora) "
                    . "VALUES (:nome,:email,:categoria,:tipopagamento,:telefone,:data,:hora)";

            $param = array(
                ":nome" => $agendamento->getAgenda_nome(),
                ":email" => $agendamento->getAgenda_email(),
                ":categoria" => $agendamento->getCategoria(),
                ":tipopagamento" => $agendamento->getTipopagamento(),
                ":telefone" => $agendamento->getAgenda_telefone(),
                ":data" => $agendamento->getAgenda_data(),
                ":hora" => $agendamento->getAgenda_hora()
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    //ATUALIZAR FORMA DE AGENDAMENTO
    public function Atualizar(Agendamento $agendamento) {
        try {
            $sql = "UPDATE agendamento 
                    SET
                    agenda_nome = :nome, agenda_email = :email, 
                    categoria = :cat, tipopagamento = :pagamento,
                    agenda_telefone = :telefone,
                    agenda_data = :data, agenda_hora = :hora
                    WHERE agenda_cod = :cod";
            $param = array(
                ":cod" => $agendamento->getAgenda_cod(),
                ":nome" => $agendamento->getAgenda_nome(),
                ":email" => $agendamento->getAgenda_email(),
                ":cat" => $agendamento->getCategoria(),
                ":pagamento" => $agendamento->getTipopagamento(),
                ":telefone" => $agendamento->getAgenda_telefone(),
                ":data" => $agendamento->getAgenda_data(),       
                ":hora" => $agendamento->getAgenda_hora()       
            );

            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
//    EXCLUIR DADOS AGENDAMENTO
    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM agendamento WHERE agenda_cod = :cod";
            $param = array(":cod" => $cod);
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

//    LISTAR PAINEL
    public function listarAgendamento($inicio = null, $quantidade = null) {

        try {

            $sql = "SELECT
                a.agenda_cod, a.agenda_nome, a.agenda_email,
                a.agenda_telefone, a.agenda_data, a.agenda_hora,
                c.cod as codCat, c.titulo as tituloCat,
                tp.cod as tipoCod, tp.tipo_titulo as tpTitulo                               
                FROM agendamento a
                INNER JOIN tipopagamento tp 
                ON tp.cod = a.tipopagamento 
                INNER JOIN categoria c ON c.cod = a.categoria
                ORDER BY a.agenda_cod DESC
                LIMIT :inicio, :quantidade";
            


            $param = array(":inicio" => $inicio, ":quantidade" => $quantidade);
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarAgendamento = [];
            foreach ($dt as $pst) {

                $agendamento = new Agendamento();
                $agendamento->setAgenda_cod($pst['agenda_cod']);
                $agendamento->setAgenda_nome($pst['agenda_nome']);
                $agendamento->setAgenda_email($pst['agenda_email']);
                $agendamento->setAgenda_telefone($pst['agenda_telefone']);
                $agendamento->setAgenda_data($pst['agenda_data']);
                $agendamento->setAgenda_hora($pst['agenda_hora']);
//                                CATEGORIA
                $agendamento->getCategoria($pst['codCat']);
                $agendamento->getCategoria($pst['tituloCat']);
//                                TIPOPAGAMENTO
                $agendamento->getTipopagamento($pst['tipoCod']);
                $agendamento->getTipopagamento($pst['tpTitulo']);


                $listarAgendamento[] = $agendamento;
            }
            return $listarAgendamento;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

//quantidades de agendamento
    public function RetornaQtdAgendamento() {
        try {
            $sql = "SELECT count(ag.agenda_cod) as total FROM agendamento ag";
            $dr = $this->pdo->ExecuteQueryOneRow($sql);
            if ($dr["total"] != null):
                return $dr["total"];
            else:
                return 0;
            endif;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function retornoAgendamentoCod($cod) {
        try {
            
            $sql = "SELECT 
                    c.cod as codCat, c.titulo as tituloCat, 
                    tp.cod as tpCod, tp.tipo_titulo as tptitulo,                     
                    a.agenda_cod, a.agenda_nome,a.agenda_email, a.categoria, a.tipopagamento,
                    a.agenda_telefone,a.agenda_hora, a.agenda_data FROM agendamento a 
                    INNER JOIN categoria c ON a.categoria = c.cod
                    INNER JOIN tipopagamento tp ON a.tipopagamento = tp.cod
                    WHERE a.agenda_cod = :cod";          
            
            $param = array(":cod" => $cod);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $agendamento = new Agendamento();
            $agendamento->setAgenda_cod($pts['agenda_cod']);
            $agendamento->setAgenda_email($pts['agenda_email']);
            $agendamento->setAgenda_nome($pts['agenda_nome']);
            $agendamento->setAgenda_data($pts['agenda_data']);
            $agendamento->setAgenda_hora($pts['agenda_hora']);
            $agendamento->setAgenda_telefone($pts['agenda_telefone']);
           
            $agendamento->getCategoria()->setCod($pts['codCat']);
            $agendamento->getCategoria()->setTitulo($pts['tituloCat']);

            $agendamento->getTipopagamento()->setCod($pts['tpCod']);
            $agendamento->getTipopagamento()->setTipo_titulo($pts['tptitulo']);
            
            return $agendamento;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
}
