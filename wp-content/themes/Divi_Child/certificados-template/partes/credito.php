<!-- Metodo Pagamento -->

<br>
                                    <h5 id="ancora_pos_envio">Método de Pagamento</h5>
                                    <hr>
                                    
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <!--Modulo-->
                                                
                                                
                                                            <label for="input_18" class="switchPagamento boleto">

                                                            <input id="input_18" type="radio" class="payMethod input"
                                                                name="payMethod"                                                       
                                                                value="boleto"
                                                                required/>
                                                                <b>Boleto</b>

                                                                <img src="<?= get_stylesheet_directory_uri().'/images/barcode.svg';?>" alt="Boleto" class="icon_pagamento">

                                                            </label>
                                                

                                                    
                                                <!--Modulo-->
                                            </div>
                                            <div class="col-sm-6">
                                                <!--Modulo-->
                                                
                                                

                                                    <label for="input_19" class="switchPagamento cartao">                                             
                                                    <input id="input_19" type="radio" class="payMethod input"
                                                            name="payMethod" 
                                                        value="credito"
                                                        required/>

                                                        <b>Cartão de Crédito</b>

                                                        <img src="<?= get_stylesheet_directory_uri().'/images/credit-card.svg';?>" alt="Cartão de Crédito" class="icon_pagamento">

                                                    </label>
                                                
                                                


                                                
                                                <!--Modulo-->
                                            </div>
                                        </div>

                                    


                                    <div class="metodo_cartao off">

                                    <div class="row mb-2">
                                    
                                        <div class="col-sm-9 offset-sm-3 col-md-6 offset-md-6">
                                            <div>
                                                <img src="<?= get_stylesheet_directory_uri().'/images/cartoes_credit.png';?>" alt="Cartões de Crédito aceitos">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                            <div class="col-sm-9 offset-sm-3 col-md-6 offset-md-6">
                                                <p>
                                                    <label for="input_24" class="et_pb_contact_form_label">
                                                        Nome Impresso no Cartão
                                                    </label>

                                                    <input id="input_24" class="input"
                                                        name="card_name"
                                                        placeholder="Nome Impresso no Cartão"
                                                        hidden/>


                                                </p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-9 offset-sm-3 col-md-6 offset-md-6">
                                                <p>
                                                    <label for="input_20" class="et_pb_contact_form_label">
                                                        Número do Cartão de Crédito
                                                    </label>

                                                    <input id="input_20" class="input card_number"
                                                        name="card_number"
                                                        placeholder="Número do Cartão de Crédito"
                                                        hidden/>


                                                </p>
                                            </div>
                                        </div>

                                        

                                       

                                        <div class="row mb-2">
                                            <div class="col-sm-3 offset-sm-3 col-md-2 offset-md-6">
                                            <p>
                                                    <label for="input_21" class="et_pb_contact_form_label">
                                                        Mês de Expiração
                                                    </label>

                                                    <select id="input_21" class="input"
                                                        name="expire_month"                                                      
                                                        hidden/>

                                                        <option value="" >Mês</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="5">05</option>   
                                                        <option value="6">06</option>
                                                        <option value="7">07</option>
                                                        <option value="8">08</option>
                                                        <option value="9">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>

                                                    </select>


                                                </p>
                                                
                                                
                                            </div>

                                            <div class="col-sm-3 col-md-2">
                                            <p>
                                                    <label for="input_22" class="et_pb_contact_form_label">
                                                        Ano
                                                    </label>

                                                    <select id="input_22"  class="input"
                                                        name="expire_year"                                                                                           
                                                        hidden/>
                                                        <option value="">      Ano    </option>
                                                        <?php
                                                            $ano_atual = date('Y');
                                                            for($i = 0; $i < 40; $i++){
                                                                $ano = $ano_atual + $i;
                                                                echo'<option value="'.$ano.'">'.$ano.'</option>';
                                                            }
                                                        ?>

                                                         </select>
                                                </p>
                                            </div>

                                            <div class="col-sm-3 col-md-2">
                                            <p>
                                                    <label for="input_23" class="et_pb_contact_form_label">
                                                        CVV
                                                    </label>

                                                    <input id="input_23" type="number" class="input"
                                                        name="card_cvv"
                                                        type="number"
                                                        placeholder="CVV"
                                                        hidden/>


                                                </p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                        <div class="col-sm-9 offset-sm-3 col-md-6 offset-md-6">
                                            <p>
                                                    <label for="input_25" class="et_pb_contact_form_label">
                                                        Parcelas
                                                    </label>

                                                    <select id="input_25" class="input parcela_valor"
                                                        name="parcela_valor"                                                      
                                                        hidden/>

                                                        <option value="">Escolha o produto</option>
                                                        

                                                    </select>


                                                </p>
                                                
                                                
                                            </div>
                                            </div>
                                        
                                    </div>

                                            
                                            
                                    <!-- FIM Metodo Pagamento -->