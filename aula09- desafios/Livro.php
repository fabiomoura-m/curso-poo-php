<?php
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $leitor;

    public function detalhes()
    {
        echo "<p>Livro escrito por {$this->autor}";
        echo "</br>Páginas: {$this->totPaginas}. Atual {$this->pagAtual}";
        echo "</br>Sendo lido por {$this->leitor->getNome()}</p>";
    }

    function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    public function abrir()
    {
        $this->aberto = true;
    }
    public function fechar()
    {
        $this->aberto = false;
    }
    public function folhear($pagina)
    {
        if ($pagina > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $pagina;
        }
    }
    public function voltarPag()
    {
        $this->pagAtual--;
    }
    public function avancarPag()
    {
        $this->pagAtual++;
    }
}
