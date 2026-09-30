<?php
require_once("Produto.php");

class Variado extends Produto {
    private string $tipo;
    private string $franquia;

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getFranquia(): string
    {
        return $this->franquia;
    }

    public function setFranquia(string $franquia): self
    {
        $this->franquia = $franquia;

        return $this;
    }
}
