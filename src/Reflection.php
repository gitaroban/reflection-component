<?php
declare(strict_types=1);

namespace Gitaroban\ReflectionComponent;

use JetBrains\PhpStorm\Pure;
use ReflectionClass;

class Reflection extends ReflectionClass
{
    /**
     * @param string $valeur
     *
     * @return false|int|string
     */
    #[Pure] public function recupererLeNomDUneConstanteParSaValeur(string $valeur): false|int|string
    {
        return array_search($valeur, $this->getConstants());
    }
}
