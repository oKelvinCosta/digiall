<?php
/**
 * Created by PhpStorm.
 * User: Kelvin
 * Date: 9/7/2018
 * Time: 5:36 PM
 */

 
// Descricao



// Códigos promocionais para teste PROD
// DVMKVESF  - muda o preço após a compra, enviando o preço no email com a diferença
// CBKWVFEO - não muda o preço hora nenhuma, é para a comissão

class GerenciadorCertificados
{


    /**
     *
     */
    const SIM = 1;
    /**
     *
     */
    const NAO = 2;

    /**
     * @var array Dados necessarios para acessar ao webservice. Os dados fornecidos terao que ser previamente fornecidos pela DigitalSign
     */
    private $authType = [
        'client_name' => 'digiall',
        // PROD
        'auth_token' => '213ldujnepcask8723cnPROD'
        // DEV
        // 'auth_token' => '213ldujnepcask8723cnaiuk'
    ];
    /**
     * @var string ecpf, ecnpj ou nfe
     */
    private $tipo;
    /**
     * @var array $_POST iputs de formularios = orderType
     */
    private $post;
    /**
     * @var array $_POST iputs de formularios com modificações, possui TODOS os campos do post
     */
    private $field;
    /**
     * @var int 2 = none, 1 = tem erro
     */
    private $has_error = self::NAO;
    /**
     * @var string alert-success, alert-danger, alert-warning ou alert-info
     */
    private $error_type;
    /**
     * @var string message
     */
    private $error_msg;

    /**
     * @var array Faturamento, seus dados são usados para criar Boleto/Pagamento em Cartão
     */
    private $orderType;

    /**
     * @var array Dados necessarios para a emissao de um certificado do tipo: e-CNPJ, ME e NFE
     */
    private $cnpjCertType;
    /**
     * @var array Dados necessarios para a emissao de um certificado do tipo: e-CPF
     */
    private $cpfCertType;

    /**
     * @var array Dados do pagamento em cartão para ser utilizado no SetPaymentOrder
     */
    private $paymentCard;


    /**
     * GerenciadorCertificados constructor.
     * @param $tipo = ecpf, ecnpj ou nfe
     * @param $post = $_POST
     */
    public function __construct($tipo, array $post)
    {

        

      
        $this->tipo = $tipo;
        $this->post = $post;
        

        $this->post['renewal'] = '0';
        $code = $this->post['product_code'];
        $this->post['product_code'] = explode('_', $code)[0];

        $this->post = HelperCertificados::sanitizador($this->post);
        

        $this->field = $this->post;
        $this->field['product_code_complement'] = explode('_', $code)[1];


        
        
        
            
            
            

        if ($this->tipo === 'ecpf' AND $post) {

          $this->setECPF();

        } else if ($this->tipo === 'ecnpj' AND $post) {

          $this->setECNPJ();

        } else if ($this->tipo === 'nfe' AND $post) {

          $this->setNFE();

        }
        // HelperCertificados::debug($this->field);
        // HelperCertificados::debug($this->post);
        // HelperCertificados::debug($this->tipo, true);

    }


    private function setECPF(){

      $this->separaDadosPessoa();


      // Chama Classe e cria o ECPF

      $Soap = new DSBRAPISoapClient();

      
      
      $cpf = $Soap->CreateCertificate_ECPF($this->authType, $this->orderType, $this->cpfCertType);
      $cpf = simplexml_load_string($cpf);

      // HelperCertificados::debug($cpf, true);

      if ($cpf->resultado == 'Erro') {
          // CPF inválido
          if (strpos($cpf->erro->mensagem, 'CPF') OR strpos($cpf->erro->mensagem, 'cpf')) {
              $this->setFeedback('alert-danger', '<b>CPF</b> informado inválido.');
              // DDD
          } else if (strpos($cpf->erro->mensagem, 'financial_phone_area_code')) {
            $this->setFeedback('alert-danger', 'O <b>DDD</b> informado não existe.');
            // Data Nascimento
          } else if (
            strpos($cpf->erro->mensagem, 'data de nascimento') 
            AND strpos($cpf->erro->mensagem, 'rfb_error') 
            AND $cpf->erro->codigo == 21
          ) {
              $this->setFeedback('alert-danger', 'A <b>data de nascimento</b> informada é divergente do CPF informado.');
              // CEP
          } else if (strpos($cpf->erro->mensagem, 'financial_cep')) {
              $this->setFeedback('alert-danger', 'Tamanho do <b>CEP</b> inválido. Formato: XXXX-XXX.');
              // Product Code
          }  else if (strpos($cpf->erro->mensagem, 'roduto ou validade')) {
            $this->setFeedback('alert-danger', '<b>Produto</b> ou <b>validade</b> inválido.');
            // Promocode
          } else if(strpos($cpf->erro->mensagem, 'odigo do Promocode Invalido')){
            $this->setFeedback('alert-danger', '<b>Codigo de Promoção</b> inválido.');
          }else {
              // Normal, um erro inesperado
              // Para debug
              // $this->setFeedback('alert-danger', $cpf->erro->mensagem);
              $this->setFeedback('alert-danger', "Formulário não enviado. Tente novamente em alguns segundos.");
          }

      } else if ($cpf->resultado == 'Sucesso') {

        
        // Para pagar com Cartao Credito
        if($this->field["payMethod"] === "credito"){
 
            $this->CompraCredito($cpf, $Soap);

        }else{
          // SUCESSO
          // Para pagar com Boleto
          // HelperCertificados::debug($cpf, true);

          $orderId = $cpf->orderid;
          $this->setFeedback('alert-success', "Pedido <b>{$orderId}</b> solicitado com sucesso! Boleto enviado para seu <b>Email</b>.");
          SendEmail::selfEmail($this->tipo, $this->field);
        }

      }
      
      // HelperCertificados::debug($cpf);
      // HelperCertificados::debug($this->showFeedback(), true);

      
    }

    private function setECNPJ(){

      $this->separaDadosEmpresa();

      // Separar CNPJ e ME


      $Soap = new DSBRAPISoapClient();

      // CNPJ normal
      if (strpos($this->orderType['product_code'], 'C91RPJA3') === false) {

           // HelperCertificados::debug($this->orderType['product_code'], true);

          $resposta = $Soap->CreateCertificate_CNPJ($this->authType, $this->orderType, $this->cnpjCertType);
          $resposta = simplexml_load_string($resposta);
      } else {

        
          // CNPJ ME, EPP, MEI
          $resposta = $Soap->CreateCertificate_ME($this->authType, $this->orderType, $this->cnpjCertType);
          $resposta = simplexml_load_string($resposta);
      }


      // HelperCertificados::debug($resposta);
      // HelperCertificados::debug($this->cnpjCertType);
      // HelperCertificados::debug($this->orderType, true);


      if ($resposta->resultado == 'Erro') {

     

          $this->TratamentoErrosBoletoECNPJeNFE($resposta);
          

      } else if ($resposta->resultado == 'Sucesso') {
        
        // Para pagar com Cartao Credito
        if($this->field["payMethod"] === "credito"){
 
          $this->CompraCredito($resposta, $Soap);

        }else{
          // SUCESSO
          // Para pagar com Boleto
          $orderId = $resposta->orderid;
          $this->setFeedback('alert-success', "Pedido <b>{$orderId}</b> solicitado com sucesso! Boleto enviado para seu <b>Email</b>.");
          SendEmail::selfEmail($this->tipo, $this->field);
        }

      }

      // HelperCertificados::debug($resposta);
      // HelperCertificados::debug($this->showFeedback(), true);
      
    }

    private function setNFE(){

      $this->separaDadosEmpresa();


      $Soap = new DSBRAPISoapClient();

      $resposta = $Soap->CreateCertificate_NFE($this->authType, $this->orderType, $this->cnpjCertType);
      $resposta = simplexml_load_string($resposta);

      if (!$resposta) {
          header("Location:" . get_permalink());
      }

      // HelperCertificados::debug($resposta);
      // HelperCertificados::debug($this->cnpjCertType);
      // HelperCertificados::debug($this->orderType, true);

      if ($resposta->resultado == 'Erro') {
        $this->TratamentoErrosBoletoECNPJeNFE($resposta);

      } else if ($resposta->resultado == 'Sucesso') {

        // Para pagar com Cartao Credito
        if($this->field["payMethod"] === "credito"){
  
          $this->CompraCredito($resposta, $Soap);

        }else{
          // SUCESSO

          // HelperCertificados::debug($resposta, true);

          $orderId = $resposta->orderid;
          $this->setFeedback('alert-success', "Pedido <b>{$orderId}</b> solicitado com sucesso! Boleto enviado para seu <b>Email</b>.");
          
          SendEmail::selfEmail($this->tipo, $this->field);
        }
        
      }

      // HelperCertificados::debug($resposta);
      // HelperCertificados::debug($this->showFeedback(), true);

    }

    /**
     * Dados do pagamento em cartão para ser utilizado no SetPaymentOrder
     */
    private function setPaymentCard($RespostaCertificado){
      
      $this->paymentCard = [
        "payMethod" => $this->field["payMethod"],
        "card_number" => HelperCertificados::resetNumeroCartao($this->field['card_number']),
        "expire_month" => $this->field["expire_month"],
        "expire_year" => $this->field["expire_year"],
        "card_name" => $this->field["card_name"], //Obrigatório apenas em débito
        "card_cvv" => $this->field["card_cvv"],
        "parcela_valor" => $this->field["parcela_valor"], //Obrigatório apenas em débito
        "orderid_pay" => $RespostaCertificado->orderid, 
        "url_retorno" => '?', //Obrigatório apenas em débito
      ];       
    }

    /**
     * Compra por Cartão de Crédito e valida os erros
     */
    private function CompraCredito($RespostaCertificado, $Soap){

      $this->setPaymentCard($RespostaCertificado);
          
      $pagamento_credito = $Soap->SetPaymentOrder($this->authType, $this->paymentCard);

      $respostaCredito = simplexml_load_string($pagamento_credito);
      


      if($respostaCredito->resultado == 'Erro'){
        $this->setFeedback('alert-danger', "Compra não efetuada. Tente novamente em alguns segundos.");
        return;

      }

      
      if($respostaCredito->code != 00){
        // Erros
        
        if($respostaCredito->code == 86){
          $this->setFeedback('alert-danger', "O cartão <b>expirou</b>.");
        }else if($respostaCredito->code == 37 OR $respostaCredito->code == 36){
          $this->setFeedback('alert-danger', "<b>Número Impresso no Cartão</b> está incorreto.");
        }else if($respostaCredito->code == 15){
          $this->setFeedback('alert-danger', "<b>CVV</b> está incorreto.");
        }else if(
          $this->field['parcela_valor']>'6' // Retirar quando tiver 12 parcelas
          OR // Retirar quando tiver 12 parcelas
           (!array_key_exists($this->field['product_code'], HelperCertificados::$precos[$this->tipo]) OR HelperCertificados::$precos[$this->tipo][$this->field['product_code']]/$this->field['parcela_valor'] < 20)
        ){
          //  OR ($this->field['parcela_valor']>'6' && $valor < 30)
          $this->setFeedback('alert-danger', "Compra não efetuada. Tente novamente em alguns segundos.");
        }else{
          $this->setFeedback('alert-danger', "Compra não efetuada. Tente novamente em alguns segundos.");
        }

        
        
      //   HelperCertificados::debug($this->paymentCard);
      //   HelperCertificados::debug($respostaCredito);
      // HelperCertificados::debug($this->showFeedback(), true);
        
      }else{
        // SUCESSO
        $orderId = $respostaCredito->orderid;
        $this->setFeedback('alert-success', "Pedido <b>{$orderId}</b> realizado com sucesso! Acompanhe sua compra pelo <b>Email</b>.");

        SendEmail::selfEmail($this->tipo, $this->field);
      }
    }

    /**
     * Valida os erros de compra por Boleto de ECNPJ (e derivados) e NFE
     */
    private function TratamentoErrosBoletoECNPJeNFE($xml){

        $resposta = $xml;

      // CPF inválido 
      if (strpos($resposta->erro->mensagem, 'CPF') AND strpos($resposta->erro->mensagem, 'rfb_error')) {
        $this->setFeedback('alert-danger', '<b>CPF</b> informado inválido.');
        // DDD
      } else if (strpos($resposta->erro->mensagem, 'financial_phone_area_code')) {
      $this->setFeedback('alert-danger', 'O <b>DDD</b> informado não existe.');
      // Data Nascimento
      } else if (
      strpos($resposta->erro->mensagem, 'data de nascimento') 
      AND strpos($resposta->erro->mensagem, 'rfb_error') 
      AND $resposta->erro->codigo == 21
      ) {
        $this->setFeedback('alert-danger', 'A <b>data de nascimento</b> informada é divergente da existente nas bases de dados da SRF.');
        // CEP 
      } else if (strpos($resposta->erro->mensagem, 'financial_cep')) {
        $this->setFeedback('alert-danger', '<b>CEP</b> inválido. Formato: XXXX-XXX.');
      }// CNPJ
      else if (strpos($resposta->erro->mensagem, 'CNPJ') OR strpos($resposta->erro->mensagem, 'cnpj') AND ($resposta->erro->codigo == 36 OR $resposta->erro->codigo == 40)) {
        $this->setFeedback('alert-danger', '<b>CNPJ</b> inválido.');
        // Product Code
      } else if (strpos($resposta->erro->mensagem, 'roduto ou validade')) {
        $this->setFeedback('alert-danger', '<b>Produto</b> ou <b>validade</b> inválido.');
        // Promocode
      } else if(strpos($resposta->erro->mensagem, 'odigo do Promocode Invalido')){
        $this->setFeedback('alert-danger', '<b>Codigo de Promoção</b> inválido.');
      }else {
        // Normal
        // $this->setFeedback('alert-danger', $resposta->erro->mensagem);
        $this->setFeedback('alert-danger', "Formulário não enviado. Tente novamente em alguns segundos.");
      }
    }



    /**
     * Separa/organiza para os atributos certos, os dados da Pessoa para setar OrderType
     */
    private function separaDadosPessoa(){
      
      $this->post['financial_cpf_cnpj'] = HelperCertificados::resetCpf($this->post['financial_cpf_cnpj']);
      $this->post['financial_cep'] = HelperCertificados::resetCep($this->post['financial_cep']);

      // teste
      // $this->post['financial_location'] = '5002704';

      $this->cpfCertType = [
          'cpf' => $this->post['financial_cpf_cnpj'],

          'data_nascimento' => HelperCertificados::resetData($this->post['data_nascimento']),

          'email' => $this->post['financial_email'],
          'estado' => $this->post['financial_state'],
          'municipio' => $this->post['financial_location'],
          'telefone_area' => $this->post['financial_phone_area_code'],
          'telefone' => $this->post['financial_phone'],

          'revogation_passphrase' => $this->post['revogation_passphrase'],
          'documento_identificacao' => $this->post['documento_identificacao'],
      ];

      unset($this->post['form_' . $this->tipo]);
      unset($this->post['cidade']);
      unset($this->post['data_nascimento']);
      unset($this->post['revogation_passphrase']);
      unset($this->post['documento_identificacao']);
      unset($this->post['revogation_passphrase_2']);

      // Tira dados de pagamento de cartao credito
      unset($this->post['card_number']);
      unset($this->post['expire_month']);
      unset($this->post['expire_year']);
      unset($this->post['card_name']);
      unset($this->post['card_cvv']);
      unset($this->post['parcela_valor']);

      if(!$this->post['promocode']){
        unset($this->post['promocode']);
      }

     
      $this->orderType = $this->post;
    }

    /**
     * Separa/organiza para os atributos certos, os dados de Empresa para setar OrderType
     */
    private function separaDadosEmpresa()
    {
        

        $this->post['financial_cpf_cnpj'] = HelperCertificados::resetCnpj($this->post['financial_cpf_cnpj']);
        $this->post['financial_cep'] = HelperCertificados::resetCep($this->post['financial_cep']);

        $this->cnpjCertType = [
            'cnpj' => HelperCertificados::resetCnpj($this->post['financial_cpf_cnpj']),
            'cpf' => HelperCertificados::resetCpf($this->post['cpf']),

            'data_nascimento' => HelperCertificados::resetData($this->post['data_nascimento']),

            'nome_empresa' => $this->post['financial_name'],
            'name_cnpj' => $this->post['name_cnpj'], // recebe o representante
            'documento_identificacao' => $this->post['documento_identificacao'],
            'email' => $this->post['financial_email'],
            'estado' => $this->post['financial_state'],
            'municipio' => $this->post['financial_location'],
            'telefone_area_representante' => $this->post['financial_phone_area_code'],
            'telefone_representante' => $this->post['financial_phone'],

            'revogation_passphrase' => $this->post['revogation_passphrase'],
        ];

        unset($this->post['form_' . $this->tipo]);
        unset($this->post['cidade']);
        unset($this->post['cpf']);
        unset($this->post['name_cnpj']);
        unset($this->post['data_nascimento']);
        unset($this->post['revogation_passphrase']);
        unset($this->post['documento_identificacao']);
        unset($this->post['revogation_passphrase_2']);

        // Tira dados de pagamento de cartao credito
        unset($this->post['card_number']);
        unset($this->post['expire_month']);
        unset($this->post['expire_year']);
        unset($this->post['card_name']);
        unset($this->post['card_cvv']);
        unset($this->post['parcela_valor']);

        if(!$this->post['promocode']){
          unset($this->post['promocode']);
        }

        $this->orderType = $this->post;
    }


  


    /**
     * Seta Feedback antes de mostrá-lo
     * @param $error_type alert-success, alert-danger, alert-warning ou alert-info
     * @param $error_msg Mensagem
     */
    private function setFeedback($error_type, $error_msg)
    {
        $this->error_type = $error_type;
        $this->error_msg = $error_msg;
        $this->has_error = self::SIM;
    }


    /**
     * Mostra Feedback se has_error = SIM(1)
     * @return string
     */
    public function showFeedback()
    {
        if ($this->has_error == self::SIM) {
            $this->resetFeedback();
            return "<div class='alert {$this->error_type}'>{$this->error_msg}</div>";
        } else {
            return null;
        }

    }


    /**
     * Apaga feedback ao atualizar a tela, após já ter mostrado
     */
    public function resetFeedback()
    {
        $this->has_error = self::NAO;
    }

}
