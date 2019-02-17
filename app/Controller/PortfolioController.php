<?php

class PortfolioController {

    private $portfolioDAO;

    public function __construct() {
        $this->portfolioDAO = new PortfolioDAO();
    }

    //    ***************************************METODOS DAO DO PAINEL**************************************************
//    CADASTRAR PAINEL
    public function Cadastrar(Portifolio $portfolio) {
        if (strlen($portfolio->getTitulo()) > 3 && strlen($portfolio->getStatus()) > 0 && strlen($portfolio->getStatus()) <= 3 && strlen($portfolio->getDescricao()) > 10 && $portfolio->getThumb() != ''):
            return $this->portfolioDAO->Cadastrar($portfolio);
        else:
            return false;
        endif;
    }

//RETORNO LISTAGEM PAINEL
    public function retornaPortfolioImagem($cod) {
        return $this->portfolioDAO->retornaPortfolioImagem($cod);
    }

//    EXCLUIR PAINEL
    function Excluir($cod) {
        if ($cod > 0):
            return $this->portfolioDAO->Excluir($cod);
        else:
            return false;
        endif;
    }

//    LISTAR PROJETOS COM LIMITE PAINEL
    public function listarPortfolio($inicio = null, $quantidade = null) {
        return $this->portfolioDAO->ListarPortfolio($inicio, $quantidade);
    }

    //    RETORNAR STATUS PROJETOS PAINEL
    public function retornaStatusProjetos($cod) {
        if ($cod > 0):
            return $this->portfolioDAO->retornaStatusProjetos($cod);
        else:
            return false;
        endif;
    }

    //ALTERA O STATUS DO PROJETOS PAINEL
    public function AlterarStatus($cod, $status) {
        return $this->portfolioDAO->AlterarStatus($cod, $status);
    }

    //QUANTIDADE DE PROJETOS PAINEL
    public function retornaQtdProjetos() {
        return $this->portfolioDAO->retornaQtdProjetos();
    }

    //    BUSCAR PROJETO PAINEL
    public function buscarProjeto($termo = null, $tipo = null) {
        return $this->portfolioDAO->buscarProjeto($termo, $tipo);
    }

    //    ALTERAR A IMAGEM DO PROJETO PAINEL
    public function AlterarImagem($cod, $thumb) {
        return $this->portfolioDAO->AlterarImagem($cod, $thumb);
    }
    //    ALTERAR O PROJETO PAINEL
    public function Atualizar(Portifolio $projeto) {
        return $this->portfolioDAO->Atualizar($projeto);
    }
    //    RETORNA ATRAVÉS DO ID DO PROJETO PAINEL
    public function retornaIdProjeto($cod) {
        return $this->portfolioDAO->retornaIdProjeto($cod);
    }
//    ============================================ SITE ================================================
    //    LISTAR PROJETOS COM LIMITE ONDE STATUS VAI SER == 1 SITE
    public function listarProjetos($inicio = null, $quantidade = null) {
        return $this->portfolioDAO->listarProjetos($inicio, $quantidade);
    }

}
