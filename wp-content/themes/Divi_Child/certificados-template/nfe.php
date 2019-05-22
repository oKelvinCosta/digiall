<?php

// Template Name: Template Certificados NF-e

// Descricao
// Página de Template NFE - Empresa

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used(get_the_ID());

// Classes
require "funcionalidades/DSBRAPISoapClient.php";
require "funcionalidades/GerenciadorCertificados.php";
require "funcionalidades/HelperCertificados.php";
require "funcionalidades/SendEmail.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'funcionalidades/PHPMailer/src/Exception.php';
require 'funcionalidades/PHPMailer/src/PHPMailer.php';
require 'funcionalidades/PHPMailer/src/SMTP.php';

$api = new GerenciadorCertificados('nfe', $_POST);

?>

    <div id="main-content" class="certificados ecnpj">


        <!--Conteúdo-->
        <div class="et_builder_inner_content et_pb_gutters3">


            <!--Featured Header-->
            <div class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular"
                 style="    background-color: white;    background-color: white; background-image:linear-gradient(3deg,#f7f7f7 12%,rgba(0,0,0,0.4) 12%), url('<?= WP_CONTENT_URL . '/uploads/2018/04/writer-02-1080x720.jpg' ?>');">


                <div class="et_pb_row et_pb_row_0">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_0    et_pb_css_mix_blend_mode_passthrough et-last-child">


                        <div class="et_pb_module et_pb_text et_pb_text_0 et_pb_bg_layout_dark  et_pb_text_align_center"
                             style="">

                            <div class="et_pb_text_inner">
                                <h1>NF-E</h1>
                                <p>O NF-e ou Nota Fiscal Eletrônica da DigitalSign é um certificado digital ICP-Brasil que permite conceder ao responsável de sua empresa a atribuição necessária para a emissão de Notas Fiscais eletrônicas.
                                </p>
                            </div>

                        </div> <!-- .et_pb_text -->
                    </div> <!-- .et_pb_column -->


                </div> <!-- .et_pb_row -->


            </div> <!-- .et_pb_section -->
            <!--Featured Header-->

            <!--Form-->
            <div class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular">
                <div class="et_pb_row et_pb_row_1 et_pb_row_fullwidth">

                    <form class="form_certificado" id="nfe_form" method="post"
                          action="<?= get_permalink() . '#ancora_pos_envio' ?>"
                          enctype="multipart/form-data">


                        <?php
                        require "partes/nfe/produtos.php";
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


                                    <?php
                                        require "partes/inputs.php";
                                        require "partes/credito.php";
                                    ?>


                                    <!--Button-->
                                    <div class="et_contact_bottom_container">
                                        <input type="submit" class="et_pb_contact_submit et_pb_button"
                                               name="form_nfe" value="Enviar"/>
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


