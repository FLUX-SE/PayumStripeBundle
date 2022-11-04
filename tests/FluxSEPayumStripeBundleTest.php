<?php

namespace Tests\FluxSE\PayumStripeBundle;

use FluxSE\PayumStripeBundle\FluxSEPayumStripeBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FluxSEPayumStripeBundleTest extends TestCase
{
    public function test__construct(): void
    {
        $bundle = new FluxSEPayumStripeBundle();

        $this->assertInstanceOf(Bundle::class, $bundle);
    }
}
