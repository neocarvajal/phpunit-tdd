<?php

namespace App;

use App\TiempoApi;

class TipoDeRopaMock
{
    private TiempoApi $api;

    public function __construct(TiempoApi $api)
    {
        $this->api = $api;
    }

    public function determina(string $city)
    {
        if ($city == '') {
            throw new \Exception('Se te ha olvidado la ciudad');
        }

        $temperatura = $this->api->queTemperaturaHaceEn($city);
       
        if ($temperatura > 18) {
            $tipoRopa = 'Franelas';
        } elseif($temperatura < 10) {
            $tipoRopa = 'Sueters';
        } else {
            $tipoRopa = 'Camisas';
        }

        return $tipoRopa;
        
    }
}