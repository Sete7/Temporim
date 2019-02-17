<?php

class AgendaController {
    private $agendamentoDAO;

    public function __construct() {
        $this->agendamentoDAO = new AgendamentoDAO();
    }

    //    ***************************************METODOS DAO DO PAINEL**************************************************
//    CADASTRAR AGENDAMENTO
   public function Cadastrar(Agendamento $agendamento) {
        if (strlen($agendamento->getAgenda_nome()) > 3):
            return $this->agendamentoDAO->Cadastrar($agendamento);
        else:
            return false;
        endif;
    }
    
//    LISTA AGENDAMENTO COM LIMIT PAINEL 
     public function listarAgendamento($inicio = null, $quantidade = null) {
         return $this->agendamentoDAO->listarAgendamento($inicio, $quantidade);
     }    
     
//     ATUALIZAR DADOS DA AGENDA
     public function Atualizar(Agendamento $agendamento) {
         return $this->agendamentoDAO->Atualizar($agendamento);
     }
     
//     EXCLUIR AGENDAMENTO
     public function Excluir($cod) {
         return $this->agendamentoDAO->Excluir($cod);
     }
     
//          LISTAR TODOS OS AGENDAMENTOS
         public function ListarTodosAgenda() {
             return $this->agendamentoDAO->ListarTodosAgenda();
         }
//         RETORNAR QUANTIDADE AGENDAMENTO
         public function RetornaQtdAgendamento() {
             return $this->agendamentoDAO->RetornaQtdAgendamento();
         }
         
//         RETORNO DE AGENDAMENTO
         public function retornoAgendamentoCod($cod) {
             return $this->agendamentoDAO->retornoAgendamentoCod($cod);
         }
         

    
    
}
