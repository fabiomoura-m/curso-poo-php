<?php

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Métodos
    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == 'cc') {
            $this->setSaldo(50);
        } else if ($tipo == 'cp') {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo '<p>Conta ainda com dinheiro, não posso fechá-la</p>';
        } else if ($this->getSaldo() < 0) {
            echo "<p>Conta está em débito, impossível encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
        }
    }


    public function depositar($valor)
    {
        if ($this->getStatus()) {
            // $this->saldo = $this->saldo + $valor;
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de R$ $valor na conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Conta fechada. Não consigo depositar</p>";
        }
    }

    public function sacar($valor)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                // $this->saldo = $this->saldo - $valor;
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$ $valor autorizado na conta da {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo insuficiente para saque</p>";
            }
        } else {
            echo "<p>Não posso sacar de uma conta fechada</p>";
        }
    }


    public function pagarMensal()
    {
        if ($this->getTipo() == 'cc') {
            $valorMensalidade = 12;
        } else if ($this->getTipo() == 'cp') {
            $valorMensalidade = 20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $valorMensalidade);
            echo "<p>Mensalidade de R$ $valorMensalidade debitada na conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Não posso cobrar de uma conta fechada.</p>";
        }
    }

    //Métodos Especiais

    function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    function setNumConta($numeroConta)
    {
        $this->numConta = $numeroConta;
    }
    function getNumConta()
    {
        return $this->numConta;
    }

    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    function getTipo()
    {
        return $this->tipo;
    }

    function setDono($dono)
    {
        $this->dono = $dono;
    }
    function getDono()
    {
        return $this->dono;
    }

    function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    function getSaldo()
    {
        return $this->saldo;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }
    function getStatus()
    {
        return $this->status;
    }
}
