<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Agendamento {

    private $agenda_cod;
    private $agenda_nome;
    private $agenda_email;
    private $categoria;
    private $tipopagamento;    
    private $agenda_telefone;
    private $agenda_data;
    private $agenda_hora;
    
    public function __construct() {
        $this->categoria = new Categoria();
        $this->tipopagamento = new TipoPagamento();
    }

    function getAgenda_cod() {
        return $this->agenda_cod;
    }

    function getAgenda_nome() {
        return $this->agenda_nome;
    }

    function getAgenda_email() {
        return $this->agenda_email;
    }

    function getAgenda_telefone() {
        return $this->agenda_telefone;
    }

    function getAgenda_data() {
        return $this->agenda_data;
    }

    function getAgenda_hora() {
        return $this->agenda_hora;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getTipopagamento() {
        return $this->tipopagamento;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setTipopagamento($tipopagamento) {
        $this->tipopagamento = $tipopagamento;
    }

    function setAgenda_cod($agenda_cod) {
        $this->agenda_cod = $agenda_cod;
    }

    function setAgenda_nome($agenda_nome) {
        $this->agenda_nome = $agenda_nome;
    }

    function setAgenda_email($agenda_email) {
        $this->agenda_email = $agenda_email;
    }

    function setAgenda_telefone($agenda_telefone) {
        $this->agenda_telefone = $agenda_telefone;
    }

    function setAgenda_data($agenda_data) {
        $this->agenda_data = $agenda_data;
    }

    function setAgenda_hora($agenda_hora) {
        $this->agenda_hora = $agenda_hora;
    }

}
