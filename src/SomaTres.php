<?php
namespace App;

/**
 * Description of SomaTres
 *
 * @author edcesar
 */
class SomaTres 
{
    public function __invoke($payload)
    {
        return $payload + 3;
    }
}
