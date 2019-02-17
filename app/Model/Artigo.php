<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artigo
 *
 * @author KMB Digital
 */
class Artigo {

    private $cod;
    private $autor;
    private $titulo;
    private $url;
    private $descricao;
    private $descrever_imagem;
    private $status;
    private $thumb;
    private $data;
    private $sugerido;
    
    function getCod() {
        return $this->cod;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getUrl() {
        return $this->url;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getDescrever_imagem() {
        return $this->descrever_imagem;
    }

    function getStatus() {
        return $this->status;
    }

    function getThumb() {
        return $this->thumb;
    }

    function getData() {
        return $this->data;
    }
    
    function getSugerido() {
        return $this->sugerido;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setDescrever_imagem($descrever_imagem) {
        $this->descrever_imagem = $descrever_imagem;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }

    function setData($data) {
        $this->data = $data;
    }
    function setSugerido($sugerido) {
        $this->sugerido = $sugerido;
    }
    
}
