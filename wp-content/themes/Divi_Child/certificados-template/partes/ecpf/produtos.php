<?php

// Descricao
// Listagem dos produtos

// Para evitar mudar todos os preços novamente
function precoFinal($valor)
{

    $final = number_format($valor, 2, ',', '.');

    return 'R$ <span class="precoFinal"> '.$final.'</span>';

}



?>

<!--Font Awesome Pro Link: https://fontawesome.com/license-->

<!--Produto-->
<div class="row voffset produto">

    <!--IMG-->
    <div class="col-sm-6 col-md-4">
        <div class="svg_img">
            <svg aria-hidden="true" data-prefix="fal" data-icon="desktop" role="img" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 576 512" class="svg-inline--fa fa-desktop fa-w-18 fa-9x">
                <path fill="currentColor"
                      d="M528 0H48C21.5 0 0 21.5 0 48v288c0 26.5 21.5 48 48 48h192l-24 96h-72c-8.8 0-16 7.2-16 16s7.2 16 16 16h288c8.8 0 16-7.2 16-16s-7.2-16-16-16h-72l-24-96h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM249 480l16-64h46l16 64h-78zm295-144c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h480c8.8 0 16 7.2 16 16v288z"
                      class=""></path>
            </svg>
        </div>
    </div>
    <!--IMG-->

    <div class="col-sm-6 col-md-8">
        <div class="row">
            <!--TXT-->
            <div class="col-sm-12 col-md-6">
                <div class="et_pb_text_inner">
                    <h1>e-CPF A1</h1>
                    <p>Sofware, Certificado Digital do tipo A1 para Pessoa física (PF) com validade de 1
                        ano.</p>
                </div>
            </div>
            <!--TXT-->

            <!--CARD-->
            <div class=" col-sm-12 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Em nossas unidades</h5>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA1SO12_Software">
                                <span class="special-tag-for-editing-text-with-html"></span>
                                1 ano - <?= precoFinal(110) ?>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <!--CARD-->
        </div>
    </div>

</div>
<!--Produto-->

<!--Produto-->
<div class="row voffset produto">

    <!--IMG-->
    <div class="col-sm-6 col-md-4">
        <div class="svg_img">
            <svg aria-hidden="true" data-prefix="fal" data-icon="file-certificate" role="img"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                 class="svg-inline--fa fa-file-certificate fa-w-16 fa-9x">
                <path fill="currentColor"
                      d="M497.9 97.98L414.02 14.1c-9-9-21.19-14.1-33.89-14.1H176c-26.5.1-47.99 21.6-47.99 48.09V165.7c-5.97 0-11.94-1.68-24.13-5.03-1.7-.46-3.36-.66-4.96-.66-5.56 0-10.43 2.5-13.66 5.79-17.95 18.26-17.07 17.77-41.7 24.5-6.7 1.81-11.97 7.21-13.78 14.07-6.47 24.67-6.09 24.16-24.02 42.32-4.95 5.04-6.9 12.48-5.08 19.43 6.56 24.38 6.52 24.39 0 48.76-1.82 6.95.12 14.4 5.08 19.45 18 18.15 17.58 17.79 24.02 42.29 1.8 6.88 7.08 12.27 13.78 14.1 1.8.48 2.92.8 4.46 1.21V496c0 5.55 2.87 10.69 7.59 13.61 4.66 2.91 10.59 3.16 15.56.7l56.84-28.42 56.84 28.42c2.25 1.12 4.72 1.69 7.16 1.69h272c26.49 0 47.99-21.5 47.99-47.99V131.97c0-12.69-5.1-24.99-14.1-33.99zM384.03 32.59c2.8.7 5.3 2.1 7.4 4.2l83.88 83.88c2.1 2.1 3.5 4.6 4.2 7.4h-95.48V32.59zM33.28 316.68c5.7-22.3 5.7-30.23.01-52.39 15.65-16.2 19.56-22.98 25.63-45.06 21.57-6.13 28.06-9.92 43.88-25.69 9.8 2.62 16.82 4.15 25.21 4.15 8.28 0 15.25-1.49 25.19-4.16 15.56 15.51 22.49 19.58 43.86 25.68 5.98 21.95 9.71 28.63 25.65 45.07-5.77 22.45-5.76 30 0 52.4-15.62 16.17-19.55 22.96-25.61 44.96-14.63 3.92-24 7.36-37.25 19.36-9.94-4.53-20.78-6.89-31.85-6.89s-21.9 2.36-31.85 6.9c-13.18-11.88-22.56-15.34-37.23-19.33-5.97-21.89-9.72-28.57-25.64-45zm101.89 133.01c-4.5-2.25-9.81-2.25-14.31 0l-40.84 20.42V409.9c.12.12.19.17.31.29 3.75 3.82 8.68 5.79 13.64 5.79 3.5 0 7.02-.98 10.16-2.97 7.25-4.59 15.56-6.88 23.87-6.88s16.62 2.29 23.87 6.86c3.16 2.02 6.68 3.01 10.17 3.01 4.96 0 9.87-1.99 13.63-5.79.13-.13.21-.18.34-.32v60.22l-40.84-20.42zm344.84 14.32c0 8.8-7.2 16-16 16h-256V391.9c1.54-.4 2.65-.71 4.44-1.19 6.7-1.82 11.97-7.22 13.77-14.08 6.47-24.68 6.09-24.16 24.03-42.32 4.95-5.04 6.9-12.49 5.07-19.44-6.53-24.33-6.55-24.34 0-48.76 1.83-6.95-.12-14.4-5.07-19.45-18-18.15-17.58-17.79-24.03-42.29-1.8-6.87-7.07-12.27-13.75-14.09-24.23-6.57-23.89-6.23-41.72-24.52-2.94-2.97-6.78-4.52-10.74-5.16V48.09c0-8.8 7.2-16.09 16-16.09h176.03v104.07c0 13.3 10.7 23.93 24 23.93h103.98v304.01z"
                      class=""></path>
            </svg>
        </div>
    </div>
    <!--IMG-->

    <div class="col-sm-6 col-md-8">
        <div class="row">
            <!--TXT-->
            <div class="col-sm-12 col-md-6">
                <div class="et_pb_text_inner">
                    <h1>e-CPF A3</h1>
                    <h4>Somente Certificado</h4>
                    <p>(Requer Mídia Compatível) Certificado Digital do tipo A3 para Pessoa física (PF) com validade de 1
                        ano, 2 anos ou 3 anos</p>
                </div>
            </div>
            <!--TXT-->

            <!--CARD-->
            <div class=" col-sm-12 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Em nossas unidades</h5>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3SE12_Certificado Digital">
                                <span class="special-tag-for-editing-text-with-html"></span>
                                1 ano - <?= precoFinal(139) ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3SE24_Certificado Digital">
                                2 anos - <?= precoFinal(160) ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3SE36_Certificado Digital">
                                3 anos - <?= precoFinal(150) ?>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <!--CARD-->
        </div>
    </div>

</div>
<!--Produto-->

<!--Produto-->
<div class="row voffset produto">

    <!--IMG-->
    <div class="col-sm-6 col-md-4">
        <div class="svg_img">
            <svg aria-hidden="true" data-prefix="fal" data-icon="credit-card-front" role="img"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                 class="svg-inline--fa fa-credit-card-front fa-w-18 fa-7x">
                <path fill="currentColor"
                      d="M528 31H48C21.5 31 0 52.5 0 79v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V79c0-26.5-21.5-48-48-48zm16 400c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V79c0-8.8 7.2-16 16-16h480c8.8 0 16 7.2 16 16v352zm-352-68v8c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v8c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12zM488 95h-80c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24zm-8 64h-64v-32h64v32zM260 319h-56c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm28-12v-40c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12zm-192 0v-40c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12zm384-40v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12z"
                      class=""></path>
            </svg>
        </div>
    </div>
    <!--IMG-->

    <div class="col-sm-6 col-md-8">
        <div class="row">
            <!--TXT-->
            <div class="col-sm-12 col-md-6">
                <div class="et_pb_text_inner">
                    <h1>e-CPF A3</h1>
                    <h4>Somente Cartão Inteligente</h4>
                    <p>Cartão Inteligente, Certificado Digital do tipo A3 para Pessoa física (PF) com validade de 1
                        ano, 2 anos ou 3 anos.</p>
                </div>
            </div>
            <!--TXT-->

            <!--CARD-->
            <div class=" col-sm-12 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Em nossas unidades</h5>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3SC12_Cartão Inteligente">
                                <span class="special-tag-for-editing-text-with-html"></span>
                                1 ano - <?= precoFinal(170) ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3SC24_Cartão Inteligente">
                                2 anos - <?= precoFinal(190) ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3SC36_Cartão Inteligente">
                                3 anos - <?= precoFinal(199) ?>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <!--CARD-->
        </div>
    </div>

</div>
<!--Produto-->

<!--Certificado + Leitora Place-->

<!--Produto-->
<div class="row voffset produto">

    <!--IMG-->
    <div class="col-sm-6 col-md-4">
        <div class="svg_img">
            <div class="item">
                <svg aria-hidden="true" data-prefix="fal" data-icon="credit-card-front" role="img"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                     class="svg-inline--fa fa-credit-card-front fa-w-18 fa-7x">
                    <path fill="currentColor"
                          d="M528 31H48C21.5 31 0 52.5 0 79v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V79c0-26.5-21.5-48-48-48zm16 400c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V79c0-8.8 7.2-16 16-16h480c8.8 0 16 7.2 16 16v352zm-352-68v8c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v8c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12zM488 95h-80c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24zm-8 64h-64v-32h64v32zM260 319h-56c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm28-12v-40c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12zm-192 0v-40c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12zm384-40v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12z"
                          class=""></path>
                </svg>
            </div>
            <div class="item">
                <svg aria-hidden="true" data-prefix="fal" data-icon="barcode-read" role="img"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                     class="svg-inline--fa fa-barcode-read fa-w-20 fa-9x">
                    <path fill="currentColor"
                          d="M152 0H8C3.6 0 0 3.6 0 8v152c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V32h120c4.4 0 8-3.6 8-8V8c0-4.4-3.6-8-8-8zm0 480H32V352c0-4.4-3.6-8-8-8H8c-4.4 0-8 3.6-8 8v152c0 4.4 3.6 8 8 8h144c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zM632 0H488c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h120v128c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V8c0-4.4-3.6-8-8-8zm0 344h-16c-4.4 0-8 3.6-8 8v128H488c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h144c4.4 0 8-3.6 8-8V352c0-4.4-3.6-8-8-8zM152 96h-48c-4.4 0-8 3.6-8 8v304c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V104c0-4.4-3.6-8-8-8zm336 320h48c4.4 0 8-3.6 8-8V104c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v304c0 4.4 3.6 8 8 8zM408 96h-48c-4.4 0-8 3.6-8 8v304c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V104c0-4.4-3.6-8-8-8zm-192 0h-16c-4.4 0-8 3.6-8 8v304c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V104c0-4.4-3.6-8-8-8zm64 0h-16c-4.4 0-8 3.6-8 8v304c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V104c0-4.4-3.6-8-8-8z"
                          class=""></path>
                </svg>
            </div>
        </div>
    </div>
    <!--IMG-->

    <div class="col-sm-6 col-md-8">
        <div class="row">
            <!--TXT-->
            <div class="col-sm-12 col-md-6">
                <div class="et_pb_text_inner">
                    <h1>e-CPF A3</h1>
                    <h4>Cartão Inteligente + Leitora</h4>
                    <p>Cartão Inteligente + Leitora, Certificado Digital do tipo A3 para Pessoa física (PF) com validade
                        de 1
                        ano, 2 anos ou 3 anos.</p>
                </div>
            </div>
            <!--TXT-->

            <!--CARD-->
            <div class=" col-sm-12 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Em nossas unidades</h5>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3SL12_Cartão Inteligente + Leitora">
                                <span class="special-tag-for-editing-text-with-html"></span>
                                1 ano - <?= precoFinal(240) ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3SL24_Cartão Inteligente + Leitora">
                                2 anos - <?= precoFinal(280) ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3SL36_Cartão Inteligente + Leitora">
                                3 anos - <?= precoFinal(319) ?>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <!--CARD-->
        </div>
    </div>

</div>
<!--Produto-->

<!--Produto-->
<div class="row voffset produto">

    <!--IMG-->
    <div class="col-sm-6 col-md-4">
        <div class="svg_img">
            <svg aria-hidden="true" data-prefix="fab" data-icon="usb" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-usb fa-w-20 fa-9x"><path fill="currentColor" d="M641.5 256c0 3.1-1.7 6.1-4.5 7.5L547.9 317c-1.4.8-2.8 1.4-4.5 1.4-1.4 0-3.1-.3-4.5-1.1-2.8-1.7-4.5-4.5-4.5-7.8v-35.6H295.7c25.3 39.6 40.5 106.9 69.6 106.9H392V354c0-5 3.9-8.9 8.9-8.9H490c5 0 8.9 3.9 8.9 8.9v89.1c0 5-3.9 8.9-8.9 8.9h-89.1c-5 0-8.9-3.9-8.9-8.9v-26.7h-26.7c-75.4 0-81.1-142.5-124.7-142.5H140.3c-8.1 30.6-35.9 53.5-69 53.5C32 327.3 0 295.3 0 256s32-71.3 71.3-71.3c33.1 0 61 22.8 69 53.5 39.1 0 43.9 9.5 74.6-60.4C255 88.7 273 95.7 323.8 95.7c7.5-20.9 27-35.6 50.4-35.6 29.5 0 53.5 23.9 53.5 53.5s-23.9 53.5-53.5 53.5c-23.4 0-42.9-14.8-50.4-35.6H294c-29.1 0-44.3 67.4-69.6 106.9h310.1v-35.6c0-3.3 1.7-6.1 4.5-7.8 2.8-1.7 6.4-1.4 8.9.3l89.1 53.5c2.8 1.1 4.5 4.1 4.5 7.2z" class=""></path></svg>
        </div>
    </div>
    <!--IMG-->

    <div class="col-sm-6 col-md-8">
        <div class="row">
            <!--TXT-->
            <div class="col-sm-12 col-md-6">
                <div class="et_pb_text_inner">
                    <h1>e-CPF A3</h1>
                    <h4>Somente Token</h4>
                    <p>Token, Certificado Digital do tipo A3 para Pessoa física (PF) com validade de 1
                        ano, 2 anos ou 3 anos.</p>
                </div>
            </div>
            <!--TXT-->

            <!--CARD-->
            <div class=" col-sm-12 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Em nossas unidades</h5>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3TO12_Token">
                                <span class="special-tag-for-editing-text-with-html"></span>
                                1 ano - <?= precoFinal(235) ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3TO24_Token">
                                2 anos - <?= precoFinal(285) ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="product_code" value="C01RPFA3TO36_Token" required>
                                3 anos - <?= precoFinal(310) ?>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <!--CARD-->
        </div>
    </div>

</div>
<!--Produto-->
