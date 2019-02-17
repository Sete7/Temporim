<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *  public function Cadastrar(TipoPagamento $tipoPagamento) {
 */

class TipoPagamentoController {

    private $tipoPagamanetoDAO;

    public function __construct() {
        $this->tipoPagamanetoDAO = new TipoPagamentoDAO();
    }

    //    ***************************************METODOS DAO DO PAINEL**************************************************
//    CADASTRAR
     public function Cadastrar(TipoPagamento $tipoPagamento) {
        if (strlen($tipoPagamento->getTipo_titulo()) > 3 && strlen($tipoPagamento->getTipo_status()) > 0 && strlen($tipoPagamento->getTipo_status()) <= 3):       
            return $this->tipoPagamanetoDAO->Cadastrar($tipoPagamento);
        else:
            return false;
        endif;
    }
//    LISTAR
    public function ListAllType() {
        return $this->tipoPagamanetoDAO->ListAllType();
    }
//    ATUALIZAR
    public function Atualizar(TipoPagamento $tipoPagamento) {   
       if(strlen($tipoPagamento->getTipo_titulo()) > 3 && strlen($tipoPagamento->getTipo_status()) > 0 && strlen($tipoPagamento->getTipo_status()) <=2):
            return $this->tipoPagamanetoDAO->Atualizar($tipoPagamento);
        else:
            return false;
        endif;
    }    
//    EXCLUIR   
    public function Excluir($cod){
        return $this->tipoPagamanetoDAO->Excluir($cod);
    }  
    
//    LISTAR FORMA DE PAGAMENTO COM LIMITE
    public function ListarTipoPagamento($inicio = null, $quantidade = null) {
        return $this->tipoPagamanetoDAO->ListarTipoPagamento($inicio, $quantidade);
    }
    
//    RETORNA FORMA DE PAGAMENTO POR QUANTIDADE
    public function RetornaQtdPagamento() {
        return $this->tipoPagamanetoDAO->RetornaQtdPagamento();
    }
    
    public function retornaPagamento($cod) {
        return $this->tipoPagamanetoDAO->retornaPagamento($cod);
    }
    

    

}


