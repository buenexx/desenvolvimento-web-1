<?php

include_once('Pessoa.php');

class Patient extends Pessoa
{
    protected Doctor $doctor;

    public function __construct(string $name, int $age, string $cpf, Doctor $doctor)
    {
        parent::__construct($name, $age, $cpf);
        $this->doctor = $doctor;
    }

    public function getDoctor(): Doctor
    {
        return $this->doctor;
    }

    public function setDoctor(Doctor $doctor): void
    {
        $this->doctor = $doctor;
    }
}
