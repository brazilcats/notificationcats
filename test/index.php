<?php

require __DIR__ . '/../vendor/autoload.php';

use Notification\Email;

$novoEmail = new Email(2,'host','email@tal.com','senha','tls','587','email@tal.com','empresatal');
$novoEmail->sendMail('Assunto','Mensagem','email@tal.com','Origem','destino@hotmail.com','Destino');
var_dump($novoEmail);