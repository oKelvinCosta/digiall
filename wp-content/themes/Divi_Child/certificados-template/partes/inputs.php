<br>
<h5>Possui um código promocional?</h5>
<hr>

<div class="row mb-2">
    <div class="col-sm-6">
        <!--Modulo-->
        <p>
            <label for="input_30" class="et_pb_contact_form_label">
            Código Promocional
            </label>
            <input type="text" id="input_30" class="promocode_field input"
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
            <label for="input_15" class="et_pb_contact_form_label">
                Documento de Identificação
            </label>

            <input minlength="2" type="text" id="input_15" class="input"
                   name="documento_identificacao"
                   placeholder="Documento de Identificação"
                   required>
        </p>
        <!--Modulo-->
    </div>
</div>

<div class="row mb-2">
    <div class="col-sm-6">
        <!--Modulo-->
        <p>
            <label for="input_17" class="et_pb_contact_form_label">
                Nome do representante da Empresa</label>
            <input type="text" id="input_17" class="input"
                   name="name_cnpj"
                   placeholder="Nome do representante"
                   required>
        </p>
        <!--Modulo-->
    </div>
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
</div>


<div class="row mb-2">
    <div class="col-sm-3">
        <!--Modulo-->
        <p>
            <label for="input_16" class="et_pb_contact_form_label">
                CPF
            </label>
            <input minlength="14" type="text" id="input_16" class="cpf_input input"
                   name="cpf"
                   placeholder="CPF"
                   required>
        </p>
        <!--Modulo-->
    </div>
    <div class="col-sm-3">
        <!--Modulo-->
        <p>
            <label for="input_2" class="et_pb_contact_form_label">
                CNPJ
            </label>
            <input type="text" id="input_2" class="cnpj_input input"
                   name="financial_cpf_cnpj"
                   placeholder="CNPJ"
                   minlength="18"
                   maxlength="18"
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

            <input type="number" id="input_7" class="ddd_input input"
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
                Senha de Alteração do Certificado
            </label>

            <input minlength="6" type="text" id="input_14" class="input"
                   name="revogation_passphrase"
                   placeholder="*Senha de Alteração do Certificado"
                   required>
        </p>
        <!--Modulo-->
    </div>

</div>


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

            <input id="input_6" class="disabled cidade  input"
                   name="cidade"
                   placeholder="Cidade"
                   required/>

            <!--Hidden-->
            <input hidden class="financial_location  input"
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

            <input id="input_5" class="disabled financial_state   input"
                   name="financial_state"
                   placeholder="Estado UF"
                   required/>


        </p>
        <!--Modulo-->
    </div>
</div>