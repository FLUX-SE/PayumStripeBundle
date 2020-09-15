<?php

namespace Tests\FluxSE\PayumStripeBundle;

use PHPUnit\Framework\TestCase;
use FluxSE\PayumStripeBundle\FluxSEPayumStripeBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FluxSEPayumStripeBundleTest extends TestCase
{
    public function test__construct()
    {
        $bundle = new FluxSEPayumStripeBundle();

        $this->assertInstanceOf(Bundle::class, $bundle);
    }
}
