<?php

include_once('Pessoa.php');

class Doctor extends Pessoa
{
    protected string $crm;

    public function __construct(string $name, int $age, string $cpf, string $crm)
    {
        parent::__construct($name, $age, $cpf);
        $this->crm = $crm;
    }

    public function getCrm(): string
    {
        return $this->crm;
    }

    public function setCrm(string $crm): void
    {
        $this->crm = $crm;
    }
}
