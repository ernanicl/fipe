<?php

namespace DeividFortuna\Fipe;

class FipeCaminhoes extends IFipe
{
    protected static $tipo = 'caminhoes';
}

// DE:
curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $token )
);

// PARA:
curl_setopt($ch, CURLOPT_HTTPHEADER, ["X-Subscription-Token:$token"]);