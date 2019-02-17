<?php

require_once('Categoria.php');

class Portifolio {
    private $cod;
    private $titulo;
    private $url;
    private $thumb;
    private $descricao;
    private $data;
    private $status;
    
    
    public function __construct(){
        $this->categoria = new Categoria();       
    }
    
    function getCod() {
        return $this->cod;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getUrl() {
        return $this->url;
    }

    function getThumb() {
        return $this->thumb;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getData() {
        return $this->data;
    }

    function getStatus() {
        return $this->status;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
