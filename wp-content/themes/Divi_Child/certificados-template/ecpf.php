<?php

// Template Name: Template Certificados e-CPF


// Descricao
// Página de Template ECPF - Pessoa


get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used(get_the_ID());


// Classes
require "funcionalidades/DSBRAPISoapClient.php";
require "funcionalidades/GerenciadorCertificados.php";
require "funcionalidades/HelperCertificados.php";
require "funcionalidades/SendEmail.php";


// EXEMPLO --
//require "funcionalidades/PHPMailer.php";
//require "funcionalidades/Externa.php";

//use funcionalidades\Externa;
//$teste1 = new Externa();




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'funcionalidades/PHPMailer/src/Exception.php';
require 'funcionalidades/PHPMailer/src/PHPMailer.php';
require 'funcionalidades/PHPMailer/src/SMTP.php';

$api = new GerenciadorCertificados('ecpf', $_POST);


?>

    <div id="main-content" class="certificados ecpf">

        <!--Conteúdo-->
        <div class="et_builder_inner_content et_pb_gutters3">


            <!--Featured Header-->
            <div class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular"
                 style="background-color: white; background-color: white; background-image:linear-gradient(3deg,#f7f7f7 12%,rgba(0,0,0,0.4) 12%), url('<?= WP_CONTENT_URL . '/uploads/2018/04/writer-02-1080x720.jpg' ?>');">


                <div class="et_pb_row et_pb_row_0">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_0    et_pb_css_mix_blend_mode_passthrough et-last-child">


                        <div class="et_pb_module et_pb_text et_pb_text_0 et_pb_bg_layout_dark  et_pb_text_align_center"
                             style="">


                            <div class="et_pb_text_inner">
                                <h1>E-CPF</h1>
                                <p>O e-CPF é um documento eletrônico que atesta a identidade de pessoas
                                    físicas no mundo digital.&nbsp;&nbsp;Este Certificado Digital é
                                    utilizado para autenticar o acesso do seu titular a sistemas, assinar
                                    documentos eletrônicos com validade jurídica.
                                </p></div>
                        </div> <!-- .et_pb_text -->
                    </div> <!-- .et_pb_column -->


                </div> <!-- .et_pb_row -->


            </div> <!-- .et_pb_section -->
            <!--Featured Header-->

            <!--Form-->
            <div class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular">
                <div class="et_pb_row et_pb_row_1 et_pb_row_fullwidth">

                    <form id="ecpf_form" method="post" action="<?= get_permalink() . '#ancora_pos_envio' ?>"
                          enctype="multipart/form-data">


                        <?php
                        require "partes/ecpf/produtos.php";
                        ?>


                        <!--Campos Text-->
                        <div class="fields et_pb_column et_pb_column_1_2 et_pb_column_2    et_pb_css_mix_blend_mode_passthrough et-last-child">


                            <div id="et_pb_contact_form_0"
                                 class="et_pb_with_border et_pb_module et_pb_contact_form_0 et_pb_contact_form_container clearfix"
                                 data-form_unique_num="0" style="">


                                <h1 class="radio_ancora et_pb_contact_main_title">Preencha os dados abaixo para fazer a
                                    solicitação:</h1>
                                <div class="et-pb-contact-message"></div>

                                <div class="et_pb_contact">

                                    <br>
                                    <h5>Possui um código promocional?</h5>
                                    <hr>

                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_30" class="et_pb_contact_form_label">
                                                    Razão Social
                                                </label>
                                                <input type="text" id="input_30" class="input"
                                                    name="promocode"
                                                    placeholder="Código de Promoção"
                                                    >
                                            </p>
                                            <!--Modulo-->
                                        </div>

                                    </div>

                                    <br>

                                    <h5>Identificação</h5>
                                    <hr>


                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_1" class="et_pb_contact_form_label">
                                                    Razão Social
                                                </label>
                                                <input type="text" id="input_1" class="input"
                                                       name="financial_name"
                                                       placeholder="Razão Social"
                                                required>
                                            </p>
                                            <!--Modulo-->
                                        </div>

                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_2" class="et_pb_contact_form_label">
                                                    CPF
                                                </label>
                                                <input minlength="14" type="text" id="input_2" class="cpf_input input"
                                                       name="financial_cpf_cnpj"
                                                       placeholder="CPF"
                                                required>
                                            </p>
                                            <!--Modulo-->
                                        </div>
                                    </div>


                                    <div class="row mb-2">
                                        <div class="col-sm-6">

                                            <!--Modulo-->
                                            <p>
                                                <label for="input_3" class="et_pb_contact_form_label">
                                                    Nome de Contato</label>
                                                <input type="text" id="input_3" class="input"
                                                       name="financial_company"
                                                       placeholder="Nome de Contato"
                                                required>
                                            </p>
                                            <!--Modulo-->
                                        </div>

                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_4" class="et_pb_contact_form_label">
                                                    Email
                                                </label>
                                                <input type="email" id="input_4" class="input"
                                                       name="financial_email"
                                                       placeholder="Email"
                                                required>
                                            </p>
                                            <!--Modulo-->
                                        </div>
                                    </div>


                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_7" class="et_pb_contact_form_label">
                                                    DDD do telefone
                                                </label>

                                                <input type="number"  id="input_7" class="ddd_input input"
                                                       name="financial_phone_area_code"
                                                       placeholder="DDD do telefone"
                                                required>
                                            </p>
                                            <!--Modulo-->
                                        </div>
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_8" class="et_pb_contact_form_label">
                                                    telefone
                                                </label>

                                                <input type="number" id="input_8" class="input"
                                                       name="financial_phone"
                                                       pattern="\d+"
                                                       placeholder="Telefone"
                                                required>
                                            </p>
                                            <!--Modulo-->
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_13" class="et_pb_contact_form_label">
                                                    Data de Nascimento
                                                </label>

                                                <input minlength="10" type="text" id="input_13" class="data_nascimento_input input"
                                                       name="data_nascimento"
                                                       placeholder="Data de Nascimento Exemplo: 30/02/1995"
                                                required>
                                            </p>
                                            <!--Modulo-->
                                        </div>

                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_14" class="et_pb_contact_form_label">
                                                    Senha de Gerenciamento do Certificado
                                                </label>

                                                <input minlength="6" type="text" id="input_14" class="input"
                                                       name="revogation_passphrase"
                                                       placeholder="*Senha de Alteração do Certificado"
                                                required>
                                            </p>
                                            <!--Modulo-->
                                        </div>

                                    </div>

                                    <!--Modulo-->
                                    <p>
                                        <label for="input_15" class="et_pb_contact_form_label">
                                            Documento de Identificação
                                        </label>

                                        <input minlength="2" type="text" id="input_15" class="input"
                                               name="documento_identificacao"
                                               placeholder="Documento de Identificação"
                                        required>
                                    </p>
                                    <!--Modulo-->

                                    <br>
                                    <h5 id="ancora_pos_envio">Endereço</h5>
                                    <hr>

                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_9" class="et_pb_contact_form_label">
                                                    CEP
                                                </label>

                                                <input type="text" id="input_9" class="cep_api input"
                                                       name="financial_cep"
                                                       placeholder="CEP"
                                                       minlength="9"
                                                       maxlength="9"
                                                       required>
                                            </p>
                                            <!--Modulo-->

                                        </div>

                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_11" class="et_pb_contact_form_label">
                                                    Número
                                                </label>

                                                <input type="number" id="input_11" class="input"
                                                       name="financial_number"
                                                       placeholder="Número Endereço"
                                                       required>
                                            </p>
                                            <!--Modulo-->

                                        </div>
                                    </div>


                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_12" class="et_pb_contact_form_label">
                                                    Bairro
                                                </label>

                                                <input type="text" id="input_12"
                                                       class="disabled financial_neighborhood input"
                                                       name="financial_neighborhood"
                                                       placeholder="Bairro"
                                                       required>
                                            </p>
                                            <!--Modulo-->
                                        </div>
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_10" class="et_pb_contact_form_label">
                                                    Endereço
                                                </label>

                                                <input type="text" id="input_10"
                                                       class="disabled financial_address input"
                                                       name="financial_address"
                                                       placeholder="Endereço"
                                                       required>
                                            </p>
                                            <!--Modulo-->
                                        </div>
                                    </div>


                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p><label
                                                        for="input_6" class="et_pb_contact_form_label">
                                                    Cidade
                                                </label>

                                                <input id="input_6" class="cidade disabled input"
                                                       name="cidade"
                                                       placeholder="Cidade"
                                                       required/>

                                                <!--Hidden-->
                                                <input hidden class="financial_location input"
                                                       id="financial_location"
                                                       name="financial_location"
                                                       placeholder="Cidade ID"
                                                       required/>
                                                <!--Hidden-->
                                            </p>
                                            <!--Modulo-->
                                        </div>
                                        <div class="col-sm-6">
                                            <!--Modulo-->
                                            <p>
                                                <label for="input_5" class="et_pb_contact_form_label">
                                                    Estado
                                                </label>

                                                <input id="input_5" class="disabled financial_state input"
                                                       name="financial_state"
                                                       placeholder="Estado UF"
                                                       required/>


                                            </p>
                                            <!--Modulo-->
                                        </div>
                                    </div>

                                    

                                    <?php
                                        require "partes/credito.php";
                                    ?>


                                    <!--Button-->
                                    <div class="et_contact_bottom_container">
                                        <input type="submit" class="et_pb_contact_submit et_pb_button"
                                               name="form_ecpf" value="Enviar"/>
                                    </div>
                                    <!--Button-->


                                </div> <!-- .et_pb_contact -->
                            </div> <!-- .et_pb_contact_form_container -->

                        </div>
                        <!--Campos Text-->


                    </form>

                </div>


                <!--Feedback-->
                <div class="et_pb_row">
                    <div id="form-alert">

                        <?= $api->showFeedback(); ?>
                        <?php
                            $api->resetFeedback();
                        ?>

                    </div>
                </div>
                <!--Feedback-->

            </div>
            <!--Form-->


            <!--Contato aqui-->


            <!--Footer-->
            <?php
            require "partes/footer.php";
            ?>
            <!--Footer-->

            <!--Conteúdo-->


        </div> <!-- #main-content -->
        <!--Conteúdo-->


    </div> <!-- #main-content -->

<?php



get_footer();




