<?php

require_once('Banco.php');

if (file_exists('../Model/Portifolio.php')):
    require_once '../Model/Portifolio.php';
elseif (file_exists('Model/Portifolio.php')):
    require_once 'Model/Portifolio.php';
endif;

class PortfolioDAO {

    private $debug;
    private $pdo;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

//    CADASTRAR PORTFÓLIO PAINEL
    public function Cadastrar(Portifolio $portfolio) {
        try {
            $sql = "INSERT INTO portifolio (titulo, url, thumb, descricao,  data, status) "
                    . "VALUES (:titulo, :url, :thumb, :descricao, :data, :status)";
            $param = array(
                ":titulo" => $portfolio->getTitulo(),
                ":url" => $portfolio->getUrl(),
                ":thumb" => $portfolio->getThumb(),
                ":descricao" => $portfolio->getDescricao(),
                ":data" => $portfolio->getData(),
                ":status" => $portfolio->getStatus()
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

    //    RETORNO DE PORTFÓLIO COM IMAGEM PARA O PAINEL
    public function retornaPortfolioImagem($cod) {
        try {
            $sql = "SELECT cod, titulo, thumb FROM portifolio WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $projeto = new Portifolio();
            $projeto->setCod($dt['cod']);
            $projeto->setTitulo($dt['titulo']);
            $projeto->setThumb($dt['thumb']);
            return $projeto;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //    EXCLUIR IMAGEM || PORTFÓLIO | PAINEL
    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM portifolio WHERE cod = :cod";
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
//    LISTAR PROJETOS COM LIMITE
    public function listarPortfolio($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM portifolio ORDER BY cod DESC LIMIT :inicio, :quantidade";   
            $param = array(":inicio" => $inicio,":quantidade" => $quantidade);
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarProjeto = [];
            foreach ($dt as $pts) {
                $projeto = new Portifolio();
                $projeto->setCod($pts['cod']);
                $projeto->setTitulo($pts['titulo']);
                $projeto->setUrl($pts['url']);
                $projeto->setDescricao($pts['descricao']);
                $projeto->setStatus($pts['status']);
                $projeto->setThumb($pts['thumb']);
                $projeto->setData($pts['data']);

                $listarProjeto[] = $projeto;
            }
            return $listarProjeto;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
//    RETORNAR STATUS PROJETOS
    public function retornaStatusProjetos($cod) {
        try {
            $sql = "SELECT cod, status FROM portifolio WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $projeto = new Portifolio();
            $projeto->setCod($dt['cod']);
            $projeto->setStatus($dt['status']);
            return $projeto;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    //ALTERA O STATUS DO SLIDER
    public function AlterarStatus($cod, $status) {
        try {
            $sql = "UPDATE portifolio SET status = :status WHERE cod = :cod";
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
    
    //QUANTIDADE DE PROJETOS
    public function retornaQtdProjetos() {
        try {
            $sql = "SELECT count(pjt.cod) as total FROM portifolio pjt";
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
    public function buscarProjeto($termo = null, $tipo = null) {
        try {
            $sql = "";            

            switch ($tipo) {
                case 1:
                    $sql = "SELECT * FROM portifolio WHERE titulo LIKE :termo ORDER BY titulo ASC";
                    break;
                case 2:
                    $sql = "SELECT * FROM portifolio WHERE cod LIKE :termo ORDER BY cod ASC";
                    break;
            }
            $param = array(":termo" => "%{$termo}%" );
            $dataTable = $this->pdo->ExecuteQuery($sql, $param);
            $listarProjeto = [];
            foreach ($dataTable as $pts) {
                $projeto = new Portifolio();
                $projeto->setCod($pts['cod']);
                $projeto->setTitulo($pts['titulo']);
                $projeto->setUrl($pts['url']);
                $projeto->setDescricao($pts['descricao']);
                $projeto->setStatus($pts['status']);
                $projeto->setThumb($pts['thumb']);
                $projeto->setData($pts['data']);
                $listarProjeto[] = $projeto;
            }
            return $listarProjeto;
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }
    
//    ALTERAR A IMAGEM DO PROJETO
    public function AlterarImagem($cod, $thumb) {
        try {
            $sql = "UPDATE portifolio SET thumb = :thumb WHERE cod = :cod";
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
    
//    ALTERAR O PROJETO PAINEL
    public function Atualizar(Portifolio $projeto) {
        try {
            $sql = "UPDATE portifolio SET titulo = :titulo, url = :url, descricao = :descricao, status = :status, data = :data WHERE cod = :cod";
            $param = array(
                ":cod" => $projeto->getCod(),
                ":titulo" => $projeto->getTitulo(),
                ":url" => $projeto->getUrl(),
                ":descricao" => $projeto->getDescricao(),
                ":status" => $projeto->getStatus(),
                ":data" => $projeto->getData()
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
    
//    RETORNA ATRAVÉS DO ID DO PROJETO
    public function retornaIdProjeto($cod) {
        try {
            $sql = "SELECT * FROM portifolio WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $projeto = new Portifolio();
            $projeto->setCod($pts['cod']);
            $projeto->setTitulo($pts['titulo']);
            $projeto->setUrl($pts['url']);
            $projeto->setDescricao($pts['descricao']);
            $projeto->setStatus($pts['status']);
            $projeto->setThumb($pts['thumb']);
            $projeto->setData($pts['data']);

            return $projeto;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    //    LISTAR PROJETOS COM LIMITE ONDE STATUS VAI SER == 1
    public function listarProjetos($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM portifolio WHERE status = 1 ORDER BY cod DESC LIMIT :inicio, :quantidade";   
            $param = array(":inicio" => $inicio,":quantidade" => $quantidade);
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarProjeto = [];
            foreach ($dt as $pts) {
                $projeto = new Portifolio();
                $projeto->setCod($pts['cod']);
                $projeto->setTitulo($pts['titulo']);
                $projeto->setUrl($pts['url']);
                $projeto->setDescricao($pts['descricao']);
                $projeto->setStatus($pts['status']);
                $projeto->setThumb($pts['thumb']);
                $projeto->setData($pts['data']);

                $listarProjeto[] = $projeto;
            }
            return $listarProjeto;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    

}
