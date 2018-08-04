<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

$redirect = "http://mercadodecafes.com";
// an email address that will be in the From field of the email.
$from = 'CLIENTE <demo@domain.com>';
$fromAR = 'AgroRenda <contatoagrorenda@gmail.com>';
// an email address that will receive the email with the output of the form
$sendTo = 'AgroRenda <contatoagrorenda@gmail.com>';

// subject of the email
$subject = 'nova mensagem no site';
$subjectCostumer = 'Bem-Vindo à AgroRenda';
$costumerText = 'Olá, tudo bem?

Meu nome é Mateus, sou cofundador da AgroRenda e acredito que nossa proposta possa te interessar muito. Estamos desenvolvendo uma plataforma para auxílio do produtor de commodities em suas vendas, fornecendo de forma simplificada as principais análises de dados do mercado e uma expectativa de seu comportamento para o futuro.

Caso deseje maiores detalhes sobre o desenvolvimento e o funcionamento do produto, acesse nosso site www.AgroRenda.com.br . Enquanto a plataforma está em desenvolvimento, estamos propondo uma análise gratuita de suas operações de vendas, visando fornecer informações sobre como sua comercialização acompanha o mercado.

Caso tenha interesse nessa análise inicial, basta preencher o formulário que se encontra abaixo (não vai te tomar nem 2 minutos, garanto) e lhe responderemos com essa análise o mais em breve possível. Acredito que se surpreenderá de saber o desempenho de suas vendas!

Desde já agradecemos imensamente sua atenção, e permanecemos disponíveis para contato por e-mail ou WhatsApp,


*Preencher formulário*
https://goo.gl/forms/ssTORasCmUjrAhD33

Mateus Santos
Cofundador | www.AgroRenda.com.br
35 99707-7139
contatoagrorenda@gmail.com'

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('email' => 'Email'); 

// message that will be displayed when everything is OK :)
$okMessage = 'E-mail submetido com sucesso! Entraremos em contato em breve';

// If something goes wrong, we will display this message.
$errorMessage = 'Erro na submissão do e-mail. Por favor, tente novamente!';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    $emailText = "Novo e-mail\n=============================\n";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));
    mail("$fields[$key]: $value", $subjectCostumer, $costumerText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}