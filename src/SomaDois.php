<?php
namespace App;

/**
 * Description of SomaDois
 *
 * @author edcesar
 */
class SomaDois 
{
    public function __invoke($payload)
    {
        return $payload + 2;
    }
}
