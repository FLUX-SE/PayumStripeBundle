<?php

namespace Tests\Prometee\PayumStripeCheckoutSessionBundle;

use Prometee\PayumStripeCheckoutSessionBundle\PrometeePayumStripeCheckoutSessionBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PrometeePayumStripeCheckoutSessionBundleTest extends TestCase
{
    public function test__construct()
    {
        $bundle = new PrometeePayumStripeCheckoutSessionBundle();

        $this->assertInstanceOf(Bundle::class, $bundle);
    }
}
