<?php

require_once 'Aeronave.php';
require_once 'Aeroporto.php';
require_once 'Cliente.php';
require_once 'Embarque.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';

enum TipoMotor : string 
{
    case BIMOTOR = 'A';
    case MONOMOTOR = 'B';
    case TRIMOTOR = 'C';
    case QUADRIMOTOR = 'D';
}