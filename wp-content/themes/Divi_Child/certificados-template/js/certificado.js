jQuery(function ($) {

// Descricao
// JS Utilizado para tratar form client side e algumas outras funcionalidades

    // Promocode ----------------------------------------

    $('.promocode_field').blur(function(){
        // var output_desconto = "<p class='green_promocode'><b>Desconto de 6%</b></p>";
        
        // Dependendo de como estarão os códigos,
        // terá que fazer ajax para consultar os preços e mostrar com desconto.
        // Para facilitar, acho que só informar o valor percentual que será descontado pode funcionar em ultimo caso
        // $.ajax({
        //     url: url,
        //     method: 'post',
        //     success: function (data) {
        //     },
        //     error: function (data) {
        //     }
        // });
        // Testar requisições ajax para arquivos php dentro do wordpress para preparar o caminho

    });


    // Scroll ----------------------------------------
    // Suave ao escolher radio input
    var valorIncalculavel = '0';
    var valorCalculavel = '0';
    $('.radio > label').on('click', function (event) {

    
        valorIncalculavel = $(this).children('.precoFinal').html();
        valorCalculavel = parseFloat(valorIncalculavel.replace(',','.'));
        
        $('.parcela_valor').html('');

        for(var i = 1; i<7; i++){
                   
            // Valor Float Calculavel JS
            var parcelaCalculavel = valorCalculavel / i;

            
            var parcelaIncalculavel = String(parcelaCalculavel.toFixed(2)).replace('.',',');

            
            if( parcelaCalculavel<20 ){
                
            }else{
                $('.parcela_valor').append('<option value="'+i+'">'+i+'x - R$ '+parcelaIncalculavel+'</option>');
            }
            

        }
        

        var id = $('.radio_ancora'),
            targetOffset = $(id).offset().top;

        setTimeout(function () {
            $('html, body').animate({
                scrollTop: targetOffset - 100
            }, 500);
        }, 350);

    });





    // Switch Pagamento ----------------------------------------

    var pagamentoBoleto = $(".switchPagamento.boleto");
    var pagamentoCartao = $(".switchPagamento.cartao");
    var metodo_cartao = $(".metodo_cartao");

    pagamentoBoleto.click(function(){
        $(this).addClass("active");
        pagamentoCartao.removeClass("active");
        metodo_cartao.hide();

        $(".metodo_cartao .input").css({
            "display":"none"
        });
        $(".metodo_cartao .input").attr('hidden', 'true');
        

        $(".metodo_cartao .input").removeAttr('required');
    });

    pagamentoCartao.click(function(){
        $(this).addClass("active");
        pagamentoBoleto.removeClass("active");
        metodo_cartao.show();

        $(".metodo_cartao .input").css({
            "display":"inline-block"
        });
        $(".metodo_cartao .input").removeAttr('hidden');

        $(".metodo_cartao .input").attr('required', 'true');

    });

    // Máscaras ----------------------------------------

    $('.cpf_input').mask('000.000.000-00');
    $('.cnpj_input').mask('00.000.000/0000-00');
    $('.ddd_input').mask('000');
    $('.data_nascimento_input').mask('00/00/0000', {placeholder: "Nascimento: DD/MM/AAAA"});
    $('.cep_api').mask('00000-000');

    $('.card_number').mask("# ###0 0000", {reverse: true});


    // API CEP ----------------------------------------

    // Campo CEP
    var cep = $('.cep_api');

    cep.on('blur', function (e) {

        if(!this.value){
            $('.financial_state').val('');
            $('.cidade').val('');
            $('.financial_location').val('');
            $('.financial_address').val('');
            $('.financial_neighborhood').val('');
        }

        // Tira o hífen para fazer a procura
        var value = this.value.split('-');
        value = value[0]+value[1];

        var url = 'https://viacep.com.br/ws/' + value + '/json/';

        $.ajax({
            url: url,
            method: 'get',
            success: function (data) {
                // console.log(data);

                // Preenche campos com os dados
                if(data && data['bairro']) {

                    var financial_state = data.uf;
                    var cidade = data.localidade;
                    var financial_location = data.ibge;
                    var financial_address = data.logradouro;
                    var financial_neighborhood = data.bairro;

                    $('.financial_state').val(financial_state);
                    $('.cidade').val(cidade);
                    $('.financial_location').val(financial_location);
                    $('.financial_address').val(financial_address);
                    $('.financial_neighborhood').val(financial_neighborhood);
                    $('#form-alert').html('');

                }else if(data['erro'] == true){

                    $('.financial_state').val('');
                    $('.cidade').val('');
                    $('.financial_location').val('');
                    $('.financial_address').val('');
                    $('.financial_neighborhood').val('');

                    // 8 dígitos e não existente no banco de dados
                    $('#form-alert').html('<div class="alert alert-danger"><b>CEP</b> não existe em nosso banco de dados, contate o suporte.</div>');
                }

            },
            error: function (data) {

                $('.financial_state').val('');
                $('.cidade').val('');
                $('.financial_location').val('');
                $('.financial_address').val('');
                $('.financial_neighborhood').val('');

                // Diferente de 8 digitos
                $('#form-alert').html('<div class="alert alert-danger"><b>CEP</b> não existe, tente novamente.</div>');
            }
        });


    });




});






function q(q) {
    return document.querySelector(q);
}


document.addEventListener("mousewheel", this.mousewheel.bind(this), { passive: false });