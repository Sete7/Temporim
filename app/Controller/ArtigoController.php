<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArtigoController
 *
 * @author KMB Digital
 */
class ArtigoController {

    private $artigoDAO;

    public function __construct() {
        $this->artigoDAO = new ArtigoDAO();
    }

//    CADASTRAR ARTIGO PAINEL
    public function Cadastrar(Artigo $artigo) {
        if (strlen($artigo->getAutor()) > 3 && strlen($artigo->getTitulo()) > 3 && strlen($artigo->getDescrever_imagem()) != '' && strlen($artigo->getStatus()) > 0 && strlen($artigo->getDescrever_imagem()) != '' && strlen($artigo->getSugerido()) != '' && strlen($artigo->getStatus()) <= 3 && strlen($artigo->getDescricao()) > 10 && $artigo->getThumb() != ''):
            return $this->artigoDAO->Cadastrar($artigo);
        else:
            return false;
        endif;
    }

//RETORNO LISTAGEM PAINEL
    public function retornaArtigoImagem($cod) {
        return $this->artigoDAO->retornaArtigoImagem($cod);
    }

//    EXCLUIR PAINEL
    function Excluir($cod) {
        if ($cod > 0):
            return $this->artigoDAO->Excluir($cod);
        else:
            return false;
        endif;
    }
    
    //    RETORNAR STATUS BLOG PAINEL
    public function retornaStatusArtigo($cod) {
        if ($cod > 0):
            return $this->artigoDAO->retornaStatusArtigo($cod);
        else:
            return false;
        endif;
    }

    //ALTERA O STATUS DO BLOG PAINEL
    public function AlterarStatus($cod, $status) {
        return $this->artigoDAO->AlterarStatus($cod, $status);
    }
    
//    LISTAR BLOG COM LIMITE PAINEL
    public function listarArtigo($inicio = null, $quantidade = null) {
        return $this->artigoDAO->listarArtigo($inicio, $quantidade);
    }
    
    //QUANTIDADE DE ARTIGO
    public function retornaQtdArtigo() {
        return $this->artigoDAO->retornaQtdArtigo();
    }
    
        //    BUSCAR PROJETO PAINEL
    public function buscarArtigo($termo = null, $tipo = null) {
        return $this->artigoDAO->buscarArtigo($termo, $tipo);
    }
    
      //    ALTERAR A IMAGEM DO PROJETO
    public function AlterarImagem($cod, $thumb) {
        return $this->artigoDAO->AlterarImagem($cod, $thumb);
    }
    
    //    ALTERAR O PROJETO PAINEL
    public function Atualizar(Artigo $artigo) {
        return $this->artigoDAO->Atualizar($artigo);
    }
    
    //    RETORNA ATRAVÉS DO ID DO PROJETO
    public function retornaIdArtigo($cod) {
        return $this->artigoDAO->retornaIdArtigo($cod);
    }
    
    //        LISTAR BLOG COM LIMITE ONDE STATUS É DEFINIDO POR UM
    public function listarArtigoLimite($inicio = null, $quantidade = null) {
        return $this->artigoDAO->listarArtigoLimite($inicio, $quantidade);
    }
    
     //        LISTAR BLOG COM LIMITE ONDE SUGERIDOS É DEFINIDO POR UM SITE
    public function artigoSugeridoLimite($inicio = null, $quantidade = null) {
        return $this->artigoDAO->artigoSugeridoLimite($inicio, $quantidade);
    }
    
    //    RETORNA ARTIGO PELA URL DO SITE
    public function retornaUrlArtigo($url) {
        return $this->artigoDAO->retornaUrlArtigo($url);
    }
    
  //BUSCAR PESQUISA DE ARTIGO
    public function buscarSearch($termo = null) {
        return $this->artigoDAO->buscarSearch($termo);
    }
    
    

}
