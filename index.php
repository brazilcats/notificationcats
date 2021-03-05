<?php

require __DIR__ . '/vendor/autoload.php';

use Notification\Email;
$novoEmail = new Email;


$novoEmail->sendMail('Assunto','Mensagem','contato@origem.com.br','Origem','contat@destino.com.br','Destino');
var_dump($novoEmail);