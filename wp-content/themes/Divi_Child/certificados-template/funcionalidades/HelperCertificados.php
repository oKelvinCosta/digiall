<?php

class HelperCertificados{


    public static $precos = [
        'ecpf' => [
            'C01RPFA1SO12' => 110,
            // --
            'C01RPFA3SE12' => 139,
            'C01RPFA3SE24' => 160,
            'C01RPFA3SE36' => 150,
            // --
            'C01RPFA3SC12' => 170,
            'C01RPFA3SC24' => 190,
            'C01RPFA3SC36' => 199,
            // --
            'C01RPFA3SL12' => 240,
            'C01RPFA3SL24' => 280,
            'C01RPFA3SL36' => 319,
            // --
            'C01RPFA3TO12' => 235,
            'C01RPFA3TO24' => 285,
            'C01RPFA3TO36' => 310
        ],
        'ecnpj' => [
            'C01RPJA1SO12' => 190,
            // --
            'C01RPJA3SE12' => 200,
            'C01RPJA3SE24' => 220,
            'C01RPJA3SE36' => 250,
            // --
            'C01RPJA3SC12' => 205,
            'C01RPJA3SC24' => 260,
            'C01RPJA3SC36' => 295,
            // --
            'C01RPJA3SL12' => 265,
            'C01RPJA3SL24' => 329,
            'C01RPJA3SL36' => 370,
            // --
            'C01RPJA3TO12' => 265,
            'C01RPJA3TO24' => 329,
            'C01RPJA3TO36' => 360,
            // --
            'C91RPJA3SE18' => 189,
            // --
            'C91RPJA3SL18' => 219,
            // --
            'C91RPJA3TO18' => 219
        ],
        'nfe' => [
            'C01MPJA1SO12' => 348,
            // --
            'C01MPJA3SE12' => 348,
            'C01MPJA3SE36' => 556,
            // --
            'C01MPJA3SC12' => 460,
            'C01MPJA3SC36' => 605,
            // --
            'C01MPJA3SL12' => 589,
            'C01MPJA3SL36' => 770,
            // --
            'C01MPJA3TO12' => 589,
            'C01MPJA3TO36' => 770
            
        ]
    ];

    
/**
     * Varre Array para segunraça
     * @param $array
     * @return array O array para visualizar pré-formatado
     */
    public static function debug($array, $die = null)
    {
       echo "<hr>";
       echo "<br>";
       
       echo"<pre>"; 
       print_r($array);
       echo"</pre>";

       echo "<br>";
       echo "<hr>";

       $die === true ? die : null;
    }



    /**
     * Varre Array para segunraça
     * @param $array
     * @return array O mesmo array seguro
     */
    public static function sanitizador($array)
    {
        $new = array();
        foreach ($array as $k => $v) {
            $new[$k] = sanitize_text_field($v);
        }
        return $new;
    }


    
    /**
     * Tira pontos, barras, hífens, depende de como está
     * @param $cpf
     * @return array|string
     */
    public static function resetCpf($cpf)
    {

        $cpf_new = explode('.', $cpf);
        $cpf_new = $cpf_new[0] . $cpf_new[1] . $cpf_new[2];
        $cpf_new = explode('-', $cpf_new);
        $cpf_new = $cpf_new[0] . $cpf_new[1];

        return $cpf_new;
    }

    /**
     * Tira pontos, barras, hífens, depende de como está
     * @param $item
     * @return array|string
     */
    public static function resetCnpj($item)
    {

        $item_new = explode('.', $item);
        $item_new = $item_new[0] . $item_new[1] . $item_new[2];
        $item_new = explode('-', $item_new);
        $item_new = $item_new[0] . $item_new[1];
        $item_new = explode('/', $item_new);
        $item_new = $item_new[0] . $item_new[1];

        return $item_new;
    }

    /**
     * Tira pontos, barras, hífens, depende de como está
     * @param $item
     * @return array|string
     */
    public static function resetData($item)
    {

        $item_new = explode('/', $item);
        $item_new = $item_new[0] . $item_new[1] . $item_new[2];

        return $item_new;
    }

    /**
     * Tira pontos, barras, hífens, depende de como está
     * @param $item
     * @return array|string
     */
    public static function resetCep($item)
    {

        $item_new = explode('-', $item);
        $item_new = $item_new[0] . $item_new[1];

        return $item_new;
    }

    /**
     * Tira pontos, barras, hífens, depende de como está
     * @param $item
     * @return array|string
     */
    public static function resetNumeroCartao($item)
    {

        $item_new = explode(' ', $item);
           
        $item_new = implode('', $item_new);
        
        return $item_new;
    }

}