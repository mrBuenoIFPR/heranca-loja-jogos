<?php
require_once("Produto.php");

class Variado extends Produto {
    private string $tipo;

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}