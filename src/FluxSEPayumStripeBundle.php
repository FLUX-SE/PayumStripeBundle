<?php

declare(strict_types=1);

namespace FluxSE\PayumStripeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FluxSEPayumStripeBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}
