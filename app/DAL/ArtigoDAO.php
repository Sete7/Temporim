<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArtigoDAO
 *
 * @author KMB Digital
 */
require_once('Banco.php');

if (file_exists('../Model/Artigo.php')):
    require_once '../Model/Artigo.php';
elseif (file_exists('Model/Artigo.php')):
    require_once 'Model/Artigo.php';
endif;

class ArtigoDAO {

    private $debug;
    private $pdo;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

//    CADASTRAR ARTIGO PAINEL
    public function Cadastrar(Artigo $artigo) {
        try {
            $sql = "INSERT INTO blog (autor, titulo, url, thumb, descrever_imagem, descricao,  data, status, sugeridas) "
                    . "VALUES (:autor, :titulo, :url, :thumb, :descrever_imagem, :descricao, :data, :status, :sugeridas)";
            $param = array(
                ":autor" => $artigo->getAutor(),
                ":titulo" => $artigo->getTitulo(),
                ":url" => $artigo->getUrl(),
                ":thumb" => $artigo->getThumb(),
                ":descrever_imagem" => $artigo->getDescrever_imagem(),
                ":descricao" => $artigo->getDescricao(),
                ":data" => $artigo->getData(),
                ":sugeridas" => $artigo->getSugerido(),
                ":status" => $artigo->getStatus()
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

    //    RETORNO DE ARTIGO COM IMAGEM PARA O PAINEL
    public function retornaArtigoImagem($cod) {
        try {
            $sql = "SELECT cod, titulo, thumb FROM blog WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $artigo = new Portifolio();
            $artigo->setCod($dt['cod']);
            $artigo->setTitulo($dt['titulo']);
            $artigo->setThumb($dt['thumb']);
            return $artigo;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //    EXCLUIR IMAGEM || ARTIGO | PAINEL
    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM blog WHERE cod = :cod";
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

    //    RETORNAR STATUS BLOG PAINEL
    public function retornaStatusArtigo($cod) {
        try {
            $sql = "SELECT cod, status FROM blog WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $artigo = new Artigo();
            $artigo->setCod($dt['cod']);
            $artigo->setStatus($dt['status']);
            return $artigo;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //ALTERA O STATUS DO BLOG PAINEL
    public function AlterarStatus($cod, $status) {
        try {
            $sql = "UPDATE blog SET status = :status WHERE cod = :cod";
            $param = array(
                ":cod" => $cod,
                ":status" => $status
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

//        LISTAR BLOG COM LIMITE
    public function listarArtigo($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM blog ORDER BY cod DESC LIMIT :inicio, :quantidade";
            $param = array(":inicio" => $inicio, ":quantidade" => $quantidade);
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarArtigo = [];
            foreach ($dt as $pts) {
                $artigo = new Artigo();
                $artigo->setCod($pts['cod']);
                $artigo->setTitulo($pts['titulo']);
                $artigo->setAutor($pts['autor']);
                $artigo->setUrl($pts['url']);
                $artigo->setDescricao($pts['descricao']);
                $artigo->setStatus($pts['status']);
                $artigo->setThumb($pts['thumb']);
                $artigo->setDescrever_imagem($pts['descrever_imagem']);
                $artigo->setData($pts['data']);

                $listarArtigo[] = $artigo;
            }
            return $listarArtigo;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //QUANTIDADE DE ARTIGO
    public function retornaQtdArtigo() {
        try {
            $sql = "SELECT count(art.cod) as total FROM blog art";
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

    //    BUSCAR PROJETO PAINEL
    public function buscarArtigo($termo = null, $tipo = null) {
        try {
            $sql = " ";
            switch ($tipo) {
                case 1:
                    $sql = "SELECT * FROM blog WHERE titulo LIKE :termo ORDER BY titulo ASC";
                    break;
                case 2:
                    $sql = "SELECT * FROM blog WHERE cod LIKE :termo ORDER BY cod ASC";
                    break;
            }
            $param = array(":termo" => "%{$termo}%");
            $dataTable = $this->pdo->ExecuteQuery($sql, $param);
            $listarArtigo = [];
            foreach ($dataTable as $pts) {
                $artigo = new Artigo();
                $artigo->setCod($pts['cod']);
                $artigo->setTitulo($pts['titulo']);
                $artigo->setAutor($pts['autor']);
                $artigo->setDescrever_imagem($pts['descrever_imagem']);
                $artigo->setUrl($pts['url']);
                $artigo->setDescricao($pts['descricao']);
                $artigo->setStatus($pts['status']);
                $artigo->setThumb($pts['thumb']);
                $artigo->setData($pts['data']);
                $listarArtigo[] = $artigo;
            }
            return $listarArtigo;
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }

    //    ALTERAR A IMAGEM DO ARTIGO
    public function AlterarImagem($cod, $thumb) {
        try {
            $sql = "UPDATE blog SET thumb = :thumb WHERE cod = :cod";
            $param = array(
                ":cod" => $cod,
                ":thumb" => $thumb
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

//    ALTERAR O ARTIGO PAINEL
    public function Atualizar(Artigo $artigo) {
        try {
            $sql = "UPDATE blog SET autor = :autor, titulo = :titulo, url = :url, descricao = :descricao,
                    status = :status, descrever_imagem = :descrever_imagem, data = :data, sugeridas = :sugeridas WHERE cod = :cod";
            $param = array(
                ":cod" => $artigo->getCod(),
                ":autor" => $artigo->getAutor(),
                ":titulo" => $artigo->getTitulo(),
                ":url" => $artigo->getUrl(),
                ":descricao" => $artigo->getDescricao(),
                ":status" => $artigo->getStatus(),
                ":descrever_imagem" => $artigo->getDescrever_imagem(),
                ":data" => $artigo->getData(),
                ":sugeridas" => $artigo->getSugerido()
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

//    RETORNA ATRAVÉS DO ID DO ARTIGO
    public function retornaIdArtigo($cod) {
        try {
            $sql = "SELECT * FROM blog WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $artigo = new Artigo();
            $artigo->setCod($pts['cod']);
            $artigo->setAutor($pts['autor']);
            $artigo->setTitulo($pts['titulo']);
            $artigo->setUrl($pts['url']);
            $artigo->setDescricao($pts['descricao']);
            $artigo->setStatus($pts['status']);
            $artigo->setDescrever_imagem($pts['descrever_imagem']);
            $artigo->setThumb($pts['thumb']);
            $artigo->setData($pts['data']);
            $artigo->setSugerido($pts['sugeridas']);

            return $artigo;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //        LISTAR BLOG COM LIMITE ONDE STATUS É DEFINIDO POR UM
    public function listarArtigoLimite($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM blog WHERE status = 1 ORDER BY cod DESC LIMIT :inicio, :quantidade";
            $param = array(":inicio" => $inicio, ":quantidade" => $quantidade);
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarArtigo = [];
            foreach ($dt as $pts) {
                $artigo = new Artigo();
                $artigo->setCod($pts['cod']);
                $artigo->setTitulo($pts['titulo']);
                $artigo->setAutor($pts['autor']);
                $artigo->setUrl($pts['url']);
                $artigo->setDescricao($pts['descricao']);
                $artigo->setStatus($pts['status']);
                $artigo->setThumb($pts['thumb']);
                $artigo->setDescrever_imagem($pts['descrever_imagem']);
                $artigo->setData($pts['data']);

                $listarArtigo[] = $artigo;
            }
            return $listarArtigo;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //        LISTAR BLOG COM LIMITE ONDE SUGERIDOS É DEFINIDO POR UM
    public function artigoSugeridoLimite($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM blog WHERE sugeridas = 1 ORDER BY cod DESC LIMIT :inicio, :quantidade";
            $param = array(":inicio" => $inicio, ":quantidade" => $quantidade);
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarArtigo = [];
            foreach ($dt as $pts) {
                $artigo = new Artigo();
                $artigo->setCod($pts['cod']);
                $artigo->setTitulo($pts['titulo']);
                $artigo->setAutor($pts['autor']);
                $artigo->setUrl($pts['url']);
                $artigo->setDescricao($pts['descricao']);
                $artigo->setStatus($pts['status']);
                $artigo->setThumb($pts['thumb']);
                $artigo->setDescrever_imagem($pts['descrever_imagem']);
                $artigo->setData($pts['data']);
                $artigo->setSugerido($pts['sugeridas']);

                $listarArtigo[] = $artigo;
            }
            return $listarArtigo;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

//    RETORNA ARTIGO PELA URL DO SITE
    public function retornaUrlArtigo($url) {
        try {
            $sql = "SELECT * FROM blog WHERE url = :url";
            $param = array(":url" => $url);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $artigo = new Artigo();
            $artigo->setCod($pts['cod']);
            $artigo->setTitulo($pts['titulo']);
            $artigo->setAutor($pts['autor']);
            $artigo->setUrl($pts['url']);
            $artigo->setDescricao($pts['descricao']);
            $artigo->setStatus($pts['status']);
            $artigo->setThumb($pts['thumb']);
            $artigo->setDescrever_imagem($pts['descrever_imagem']);
            $artigo->setData($pts['data']);

            return $artigo;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //BUSCAR PESQUISA DE ARTIGO
    public function buscarSearch($termo = null) {
        try {
            
            $sql = "SELECT * FROM blog WHERE titulo LIKE :termo  AND status = 1 ORDER BY titulo ASC";

            $param = array(":termo" => "%{$termo}%");
            $dataTable = $this->pdo->ExecuteQuery($sql, $param);
            $listarArtigo = [];
            foreach ($dataTable as $pts) {
                $artigo = new Artigo();
                $artigo->setCod($pts['cod']);
                $artigo->setTitulo($pts['titulo']);
                $artigo->setAutor($pts['autor']);
                $artigo->setUrl($pts['url']);
                $artigo->setDescricao($pts['descricao']);
                $artigo->setStatus($pts['status']);
                $artigo->setThumb($pts['thumb']);
                $artigo->setData($pts['data']);
                $listarArtigo[] = $artigo;
            }
            return $listarArtigo;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

}
