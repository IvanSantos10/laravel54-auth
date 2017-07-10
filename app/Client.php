<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const  ESTADOS_CIVIS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    const PESSOA_FISICA = 'fisica';
    const PESSOA_JURIDICA = 'juridica';

    protected $fillableGeneral = [
        'nome',
        'documento',
        'email',
        'telefone',
        'inadimplente',
    ];

    public static function getPessoa($value)
    {
        return $value == Client::PESSOA_JURIDICA ? $value : Client::PESSOA_FISICA;
    }
}
