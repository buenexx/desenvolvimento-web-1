<?php

include_once('Doctor.php');
include_once('Patient.php');

$doctor = new Doctor('Matias', 26, '123.456.789-11', '123A');
$patient = new Patient('Ana', 18, '987.654.321-99', $doctor);

var_dump($patient->getDoctor()->getNome());
