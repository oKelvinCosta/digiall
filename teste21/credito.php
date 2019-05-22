
<?php


// Classe Fornecida
require "assets/DSBRAPISoapClient.php";

echo"<pre>";
print_r('teste 1');
echo"</pre>";

$api = new DSBRAPISoapClient();

echo"<pre>";
print_r('teste 2');
echo"</pre>";



// Dados
$authtype = [
    'client_name' => 'digiall', 
    'auth_token' => '213ldujnepcask8723cnaiuk'
];
$cpf = '64610764920';
$orderType = [
    'financial_name' => 'meunome',
    // CPF qualquer
    'financial_cpf_cnpj' => $cpf,
    'financial_company' => 'meunome',
    'financial_email' => 'okelvincosta@gmail.com',
    'financial_state' => 'MG',
    'financial_location' => '3106200',
    'financial_phone_area_code' => '031',
    'financial_phone' => '34882469',
    'financial_cep' => '31080055',
    'financial_address' => 'meunome',
    'financial_number' => '125',
    'financial_neighborhood' => 'meunome',
    'product_code' => 'C01RPFA1SO12',
    'financial_complement' => 'meunome',

    'payMethod' => 'credito',
    'renewal' => '0'
];
$cpfType = [
    // CPF qualquer
    'cpf' => $cpf,
    'data_nascimento' => '01021968',
    'email' => 'teste@gmail.com',
    'estado' => 'MG',
    'municipio' => '3106200',
    'telefone_area' => '031',
    'telefone' => '34882469',
    // Eu escolho o que colocar neste lugar?
    'revogation_passphrase' => 'minhasenha',
    // Documento_identificacao qualquer
    'documento_identificacao' => '483000115',
];




$retorno = $api->CreateCertificate_ECPF($authtype, $orderType, $cpfType);

$xml = simplexml_load_string($retorno);


$number = '5448280000000007';
$card_cvv = '132';

$paymentCard = [
    "payMethod" => 'credito',
    "card_number" => $number,
    "expire_month" => '12',
    "expire_year" => '2019',
    "card_name" => 'joao credito', //obrigatorio
    "card_cvv" => $card_cvv,
    "parcela_valor" => '0', //obrigatorio
    "orderid_pay" => $xml->orderid, //obrigatorio
    "url_retorno" => ''
  ]; 

$pagamento_credito = $api->SetPaymentOrder($authtype, $paymentCard);

$pagamento_credito = simplexml_load_string($pagamento_credito);


echo"<pre>";
print_r('teste 4');
print_r($xml);
print_r($pagamento_credito);
echo"</pre>";

// $xml->resultado sempre
// $xml->erro

die;