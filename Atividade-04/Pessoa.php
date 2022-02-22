<?php

class Pessoa
{
    protected string $name;
    protected int $age;
    protected string $cpf;

    public function __construct(string $name, int $age, string $cpf)
    {
        $this->name = $name;
        $this->age = $age;
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    protected function setAge(int $age): void
    {
        $this->age = $age;
    }

    protected function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    protected function setNome(string $name): void
    {
        $this->name = $name;
    }
}
