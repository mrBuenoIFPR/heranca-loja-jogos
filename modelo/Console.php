<?php
require_once("Produto.php");

class Console extends Produto {
    private int $geracao;
    private string $marca;
    private string $cor;

    public function getGeracao(): int
    {
        return $this->geracao;
    }

    public function setGeracao(int $geracao): self
    {
        $this->geracao = $geracao;

        return $this;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getCor(): string
    {
        return $this->cor;
    }

    public function setCor(string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }
}