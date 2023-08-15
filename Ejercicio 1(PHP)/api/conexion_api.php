<?php
    // Obtener imagenes de api para formulario (https://www.pexels.com/)
    function getImages(){
        $curl = curl_init();

        $headerData = array();
        $headerData[] = 'Content-type:application/json';
        $headerData[] = 'Authorization:IJqtald7zyq5Vc09f7Pp2llqVTgkqz4y9d1HVBxuoFch535kozTfpqa0';
        
        curl_setopt($curl, CURLOPT_HTTPHEADER,$headerData);
        curl_setopt($curl, CURLOPT_URL, "https://api.pexels.com/v1/search?query=programer&per_page=1&per_page=10&orientation=landscape");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        
        curl_close($curl);
        $imageIndex = rand(0, 10);
        $images = json_decode($result, true) ;

        return $images['photos'][$imageIndex];

    }
    // Obtener data desde api QR
    function getData($quantity, $num){

        $curl = curl_init();

            $fields_string = '{"cantidad":'.$quantity.',"numeroautorizacion":'.$num.'}';
        
            $headerData = array();
            $headerData[] = 'Content-type:application/json';
            $headerData[] = 'Authorization: Bearer sWCkATuQlzT2solMGTM8BumHnr5CcKtrl70r3kVAK6wuVHPq2nAq1O2M0D4w';

            
            curl_setopt($curl, CURLOPT_HTTPHEADER,$headerData);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string );
            curl_setopt($curl, CURLOPT_URL, "http://149.202.12.81/rapidprest_i2/public/api/maq1/generarqr/prueba1");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            

            $result = curl_exec($curl);
        
        curl_close($curl);

        return $result;
    }
    
?>