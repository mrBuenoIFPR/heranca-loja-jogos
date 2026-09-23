<?php

class Produto {
    protected string $nome;
    protected int $preco;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPreco(): int
    {
        return $this->preco;
    }

    public function setPreco(int $preco): self
    {
        $this->preco = $preco;

        return $this;
    }
}
