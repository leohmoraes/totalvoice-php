<?php
//rode composer require total-voice/php-client 1.*
//arquivo colocado na raiz

$Token = "seu-token-obtido-no-painel-de-configuracoes-da-total-voice"; //

require_once "vendor/autoload.php";

use TotalVoice\Client as TotalVoiceClient;

$client = new TotalVoiceClient($Token);

// Considero que já existe um autoloader compatível com a PSR-4 registrado

use TotalVoice\Client as TotalVoiceClient;

$response = $client->perfil->consultaSaldo();

echo $response->getContent(); // {}
