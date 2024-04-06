<?php

require_once 'Aeronave.php';
require_once 'Aeroporto.php';
require_once 'Cliente.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';
require_once 'CheckIn.php';

enum Contrato : string
{
    case CLT = "A";
    case TERCEIRIZADO = "B";
    case CNPJ = "C";
}