<div class="et_pb_section et_pb_section_7 et_pb_with_background et_pb_inner_shadow et_section_regular">


    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_1_3 et_pb_column_6    et_pb_css_mix_blend_mode_passthrough">


            <div class="et_pb_module et_pb_text et_pb_text_3 et_pb_bg_layout_light  et_pb_text_align_left"
                 style="">


                <div class="et_pb_text_inner">

                    <h2>Contato</h2>
                    <p>(31) 2534.6596</p>
                    <p>contato@digiallsolucoes.com.br</p>
                </div>
            </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column -->
        <div class="et_pb_column et_pb_column_1_3 et_pb_column_7    et_pb_css_mix_blend_mode_passthrough">


            <div class="et_pb_module et_pb_text et_pb_text_4 et_pb_bg_layout_light  et_pb_text_align_left"
                 style="">


                <div class="et_pb_text_inner">
                    <h2>Endereço</h2>
                    <p>Rua Tamoios 666, 7º andar.</p>
                    <p>Belo Horizonte - MG&nbsp;</p>
                </div>
            </div> <!-- .et_pb_text -->

            <!--MAP-->
            <?php
                require "map.php";
            ?>
            <!--MAP-->

        </div> <!-- .et_pb_column -->
        <div class="et_pb_column et_pb_column_1_3 et_pb_column_8    et_pb_css_mix_blend_mode_passthrough et-last-child">


            <div class="et_pb_with_border et_pb_module et_pb_login et_pb_login_0 et_pb_newsletter clearfix et_pb_bg_layout_light  et_pb_text_align_left"
                 style="background-color: #ffffff;">


                <div class="et_pb_newsletter_description">
                    <h2 class="et_pb_module_header">Área Restrita</h2>
                    <?php
                        if(is_user_logged_in()){
                            ?>
                            <div class="et_pb_newsletter_description_content"><p>&nbsp;</p><br>Logged:
                                <a
                                        href="http://digiallsolutions.com.br/wp-login.php?action=logout&amp;_wpnonce=50f2ea544e">Log
                                    out</a></div>
                    <?php
                        }else{
                            ?>
                            <div class="et_pb_newsletter_description_content"><p>&nbsp;</p><br>
                                 <a
                                        href="http://digiallsolutions.com.br/wp-admin">Login
                                </a></div>
                            <?php
                        }
                    ?>
                </div>

            </div>
        </div> <!-- .et_pb_column -->


    </div> <!-- .et_pb_row -->
    <div class="et_pb_row et_pb_row_5 et_pb_row_fullwidth">
        <div class="et_pb_column et_pb_column_4_4 et_pb_column_9    et_pb_css_mix_blend_mode_passthrough et-last-child">


            <div class="et_pb_module et_pb_text et_pb_text_5 et_pb_bg_layout_light  et_pb_text_align_right">


                <div class="et_pb_text_inner">
                    <p><a title="Substratum" href="https://www.substratum.com.br"
                          target="_blank" rel="noopener noreferrer"><img
                                class="wp-image-250 alignnone size-full"
                                src="https://substratum.com.br/wp-content/uploads/2018/06/footer_sign.png"
                                alt="" width="202" height="30"></a></p>
                </div>
            </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column -->


    </div> <!-- .et_pb_row -->


</div> <!-- .et_pb_section -->            </div>