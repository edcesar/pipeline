<?php
namespace App;

/**
 * Description of SomaUm
 *
 * @author edcesar
 */
class SomaUm
{
    public function __invoke($payload)
    {
        return $payload + 1;
    }
}
