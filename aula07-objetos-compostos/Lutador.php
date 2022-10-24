<?php

class Lutador
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    //Metodos
    public function apresentar()
    {
        echo "<p>------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador {$this->getNome()} veio diretamente de {$this->getNacionalidade()}, tem {$this->getIdade()} anos e pesa {$this->getPeso()} Kg <br>Ele tem {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates.</p>";
    }
    public function status()
    {
        echo "<p>------------------------</p>";
        echo "<p>{$this->getNome()} é um peso {$this->getCategoria()} e já ganhou {$this->getVitorias()} vezes, perdeu {$this->getDerrotas()} vezes e empatou {$this->getEmpates()} vezes.</p>";
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    // Métodos especiais
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }


    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = 'Inválido';
        } else if ($this->peso <= 70.3) {
            $this->categoria = 'Leve';
        } else if ($this->peso <= 83.9) {
            $this->categoria = 'Médio';
        } else if ($this->peso <= 120.2) {
            $this->categoria = 'Pesado';
        } else {
            $this->categoria = 'Inválido';
        }
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    public function getEmpates()
    {
        return $this->empates;
    }
    function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }
}
