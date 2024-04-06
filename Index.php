<?php

require_once 'Aeronave.php';
require_once 'Aeroporto.php';
require_once 'Cliente.php';
require_once 'Funcionario.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';
require_once 'ENUM/Cargo.php';
require_once 'ENUM/Contrato.php';
require_once 'ENUM/TipoMotor.php';
require_once 'CheckIn.php';
require_once 'Bagagem.php';


// Tipos de contrato - Funcionário Contratado, Funcionário Terceiro, Cliente externo.

// Verificar distância máxima ininterrupta de um avião para checar se pode cumprir o voo.

// Apresentar a média de um avião, calculando a distancia máxima com o máximo do tanque de gasosa.

// Tipos de serviço - Passagem, Carga, Passagem com carga.

// Armazenamento em metros cubicos.

// Para adicionar novo transporte de carga, verificar se o almoxarifado do local não está cheio.

// Tipo da carga será bagagem, caixas, bagagem e caixas.

// Almoxarifado só armazena se for caixa.

// Criando uma Aeronave
$aeronave = new Aeronave(001, "Maria Fumaça", 4, TipoMotor::MONOMOTOR);
$aeronave1 = new Aeronave(002, "Airbus A380", 853, tipoMotor::QUADRIMOTOR);
$aeronave2 = new Aeronave(003, "Airbus A340", 500, tipoMotor::TRIMOTOR);
$aeronave3 = new Aeronave(004, "Boeing 777", 450, tipoMotor::BIMOTOR);

/* Adicionando Pessoas
$pessoa = new Pessoa("Cleiton Rasta", new DateTime("2000-10-30"), "999.999.999-99", "99.999.999-4", "Dubai");
$pessoa1 = new Pessoa("Jojo Toddynho", new DateTime("1996-12-17"), "999.999.999-99", "99.999.999-4", "Dubai");
$pessoa2 = new Pessoa("Bambam", new DateTime("2002-9-10"), "999.999.999-99", "99.999.999-4", "Dubai");
$pessoa3 = new Pessoa("Popó", new DateTime("2005-6-1"), "999.999.999-99", "99.999.999-4", "Dubai"); */

// Adicionando Clientes
$cliente = new Cliente(001, new DateTime('now'), "Gustavo", new DateTime("2000-10-10"), "999.999.999-99", "99.999.999-4", "Rua 1");
$cliente1 = new Cliente(002, new DateTime('now'), "Otávio", new DateTime("2005-12-7"), "999.999.999-99", "99.999.999-4", "Rua 2");
$cliente2 = new Cliente(003, new DateTime('now'), "Bruno", new DateTime("1995-8-3"), "999.999.999-99", "99.999.999-4", "Rua 3");
$cliente3 = new Cliente(004, new DateTime('now'), "Ivan", new DateTime("2008-5-1"), "999.999.999-99", "99.999.999-4", "Rua 4");

// Adicionando o array de clientes
$clientes = [
    $cliente = new Cliente(001, new DateTime('now'), "Gustavo", new DateTime("2000-10-10"), "999.999.999-99", "99.999.999-4", "Rua 1"),
    $cliente1 = new Cliente(002, new DateTime('now'), "Otávio", new DateTime("2005-12-7"), "999.999.999-99", "99.999.999-4", "Rua 2"),
    $cliente2 = new Cliente(003, new DateTime('now'), "Bruno", new DateTime("1995-8-3"), "999.999.999-99", "99.999.999-4", "Rua 3"),
    $cliente3 = new Cliente(004, new DateTime('now'), "Ivan", new DateTime("2008-5-1"), "999.999.999-99", "99.999.999-4", "Rua 4")
];

// Adicionando passagens
$bagagem = new Bagagem (001, 9, $cliente);
$bagagem1 = new Bagagem (002, 6, $cliente1);
$bagagem2 = new Bagagem (003, 12, $cliente2);
$bagagem3 = new Bagagem (004, 2, $cliente3);

// Adicionando funcionários
$funcionario = new Funcionario(001, Cargo::PILOTO, Contrato::CNPJ, 25000.25, new DateTime('2013-12-01'), "João", new DateTime("1995-11-10"), "999.999.999-99", "99.999.999-4", "Rua 1");
$funcionario1 = new Funcionario(002, Cargo::COPILOTO, Contrato::CLT, 10000.78, new DateTime('2013-12-01'), "Rafael", new DateTime("1995-11-10"), "999.999.999-99", "99.999.999-4", "Rua 1");
$funcionario2 = new Funcionario(003, Cargo::COPILOTO, Contrato::TERCEIRIZADO, 10000, new DateTime('2013-12-01'), "Ederson", new DateTime("1995-11-10"), "999.999.999-99", "99.999.999-4", "Rua 1");
$funcionario4 = new Funcionario(004, Cargo::AEROMOCA, Contrato::CLT, 9500.78, new DateTime('2013-12-01'), "Marta", new DateTime("1995-11-10"), "999.999.999-99", "99.999.999-4", "Rua 1");

// Adicionando array de funcionários
$funcionarios = [
    $funcionario = new Funcionario(001, Cargo::PILOTO, Contrato::CNPJ, 25000.25, new DateTime('2013-12-01'), "João", new DateTime("1995-11-10"), "999.999.999-99", "99.999.999-4", "Rua 1"),
    $funcionario1 = new Funcionario(002, Cargo::COPILOTO, Contrato::CLT, 10000.78, new DateTime('2013-12-01'), "Rafael", new DateTime("1995-11-10"), "999.999.999-99", "99.999.999-4", "Rua 1"),
    $funcionario2 = new Funcionario(003, Cargo::COPILOTO, Contrato::TERCEIRIZADO, 10000, new DateTime('2013-12-01'), "Ederson", new DateTime("1995-11-10"), "999.999.999-99", "99.999.999-4", "Rua 1"),
    $funcionario3 = new Funcionario(004, Cargo::AEROMOCA, Contrato::CLT, 9500.78, new DateTime('2013-12-01'), "Marta", new DateTime("1995-11-10"), "999.999.999-99", "99.999.999-4", "Rua 1")
];

// Criando Aeroportos
$aeroporto = new Aeroporto(001, 6, 3, 200, "Roncador - PR");
$aeroporto1 = new Aeroporto(002, 40, 29, 10000, "Maringá - PR");
$aeroporto2 = new Aeroporto(003, 500, 199, 45000, "Curitiba - PR");
$aeroporto3 = new Aeroporto(004, 380, 280, 30000, "Londrina - PR");

// Criando Voos
$voo1 = new Voo(001, $aeronave1, $aeroporto1, $aeroporto2, 1.2, new DateTime('2024-01-01'),$clientes, $funcionarios);
$voo2 = new Voo(002, $aeronave, $aeroporto, $aeroporto2, 0.5, new DateTime('2024-03-20'), $clientes, $funcionarios);
$voo3 = new Voo(003, $aeronave2, $aeroporto, $aeroporto3, 2, new DateTime('2024-04-10'), $clientes, $funcionarios);
$voo4 = new Voo(004, $aeronave3, $aeroporto3, $aeroporto1, 0.55, new DateTime('2023-12-5'), $clientes, $funcionarios);

// Adicionando array de voos
$voos = [
    $voo1 = new Voo(001, $aeronave1, $aeroporto1, $aeroporto2, 1.2, new DateTime('2024-01-01'),$clientes, $funcionarios),
    $voo2 = new Voo(002, $aeronave, $aeroporto, $aeroporto2, 0.5, new DateTime('2024-03-20'), $clientes, $funcionarios),
    $voo3 = new Voo(003, $aeronave2, $aeroporto, $aeroporto3, 2, new DateTime('2024-04-10'), $clientes, $funcionarios),
    $voo4 = new Voo(004, $aeronave3, $aeroporto3, $aeroporto1, 0.55, new DateTime('2023-12-5'), $clientes, $funcionarios)
];

// Adicionando clientes e funcionários com a função no voo1.
$voo1->adicionarClientes($cliente);
$voo1->adicionarClientes($cliente1);
$voo1->adicionarClientes($cliente2);
$voo1->adicionarClientes($cliente3);
$voo1->adicionarFuncionarios($funcionario);
$voo1->adicionarFuncionarios($funcionario1);
$voo1->adicionarFuncionarios($funcionario2);
$voo1->adicionarFuncionarios($funcionario3);

$voo2->adicionarClientes($cliente);
$voo2->adicionarClientes($cliente1);
$voo2->adicionarClientes($cliente2);
$voo2->adicionarClientes($cliente3);
$voo2->adicionarFuncionarios($funcionario);
$voo2->adicionarFuncionarios($funcionario1);
$voo2->adicionarFuncionarios($funcionario2);
$voo2->adicionarFuncionarios($funcionario3);

$voo3->adicionarClientes($cliente);
$voo3->adicionarClientes($cliente1);
$voo3->adicionarClientes($cliente2);
$voo3->adicionarClientes($cliente3);
$voo3->adicionarFuncionarios($funcionario);
$voo3->adicionarFuncionarios($funcionario1);
$voo3->adicionarFuncionarios($funcionario2);
$voo3->adicionarFuncionarios($funcionario3);

$voo4->adicionarClientes($cliente);
$voo4->adicionarClientes($cliente1);
$voo4->adicionarClientes($cliente2);
$voo4->adicionarClientes($cliente3);
$voo4->adicionarFuncionarios($funcionario);
$voo4->adicionarFuncionarios($funcionario1);
$voo4->adicionarFuncionarios($funcionario2);
$voo4->adicionarFuncionarios($funcionario3);

// Comprando as passagens
$passagem = new Passagem($cliente, 001, 43, 1, new DateTime('2024-06-04'), $voo1);
$passagem1 = new Passagem($cliente1, 002, 8, 2, new DateTime('2020-06-04'), $voo2);
$passagem2 = new Passagem($cliente2, 003, 23, 3, new DateTime('2025-06-04'), $voo3);
$passagem3 = new Passagem($cliente3, 004, 04, 4, new DateTime('2023-06-04'), $voo4);

// Realizando o checkin
$check = new Checkin($cliente, $passagem);
$check1 = new Checkin($cliente1, $passagem1);
$check2 = new Checkin($cliente2, $passagem2);
$check3 = new Checkin($cliente3, $passagem3); 

// Realizando checkIn de pessoas com passagens inválidas.
/* 
$check = new Checkin($cliente, $passagem1);
$check1 = new Checkin($cliente1, $passagem);
$check2 = new Checkin($cliente2, $passagem3);
$check3 = new Checkin($cliente3, $passagem2); 
*/

// Prints
echo "_______________________________Bem vindo ao Aeroporto_______________________________\n";
echo "________________________Somos a companhia Integrated Airliness______________________\n";
echo "_____________________________Esse são os nossos Aeroportos__________________________\n";
echo $aeroporto -> __toString();
echo "____________________________________________________________________________________\n";
echo $aeroporto1 -> __toString();
echo "____________________________________________________________________________________\n";
echo $aeroporto2 -> __toString();
echo "____________________________________________________________________________________\n";
echo $aeroporto3 -> __toString();
echo "************************************************************************************\n";
echo "************************************************************************************\n";
echo "_______________________________Essas são nossas Aeronaves___________________________\n";
echo $aeronave-> __toString();
echo "____________________________________________________________________________________\n";
echo $aeronave1-> __toString();
echo "____________________________________________________________________________________\n";
echo $aeronave2-> __toString();
echo "____________________________________________________________________________________\n";
echo $aeronave3-> __toString();
echo "************************************************************************************\n";
echo "************************************************************************************\n";
echo "____________________________Essas são nossas opções de vôos_________________________\n";
echo $voo1 -> __toString();
echo "____________________________________________________________________________________\n";
echo $voo2 -> __toString();
echo "____________________________________________________________________________________\n";
echo $voo3 -> __toString();
echo "____________________________________________________________________________________\n";
echo $voo4 -> __toString();
echo "************************************************************************************\n";
echo "************************************************************************************\n";
echo "_______________________________Veja nossas movimentações____________________________\n";
// Testando as funções de adicionar e remover voos
$aeroporto->adicionarVoo($voo1);
echo "____________________________________________________________________________________\n";
$aeroporto->adicionarVoo($voo2);
echo "____________________________________________________________________________________\n";
$aeroporto->adicionarVoo($voo3);
echo "____________________________________________________________________________________\n";
$aeroporto->removerVoo($voo3);
echo "____________________________________________________________________________________\n";
$aeroporto->removerVoo($voo1);
echo "____________________________________________________________________________________\n";
$aeroporto->removerVoo($voo2);
echo "____________________________________________________________________________________\n";
$aeroporto->adicionarVoo($voo4);
echo "************************************************************************************\n";
echo "************************************************************************************\n";
echo "_____________________________________Validações_____________________________________\n";
// Validando a passagem
$check->validarPassagem();
echo $voo1 -> __toString();
echo "____________________________________________________________________________________\n";
$check1->validarPassagem();
echo $voo2 -> __toString();
echo "____________________________________________________________________________________\n";
$check2->validarPassagem();
echo $voo3 -> __toString();
echo "____________________________________________________________________________________\n";
$check3->validarPassagem();
echo $voo4 . "\n";
echo "************************************************************************************\n";
echo "************************************************************************************\n";

// Tentando remover um vôo que não foi adicionado
// $aeroporto->removerVoo($voo2);

