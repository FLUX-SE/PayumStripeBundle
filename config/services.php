<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use FluxSE\PayumStripe\StripeCheckoutSessionGatewayFactory;
use FluxSE\PayumStripe\StripeJsGatewayFactory;
use Payum\Core\Bridge\Symfony\Builder\GatewayFactoryBuilder;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set('flux_se.payum_stripe.gateway_factory_builder', GatewayFactoryBuilder::class)
        ->arg('$gatewayFactoryClass', StripeCheckoutSessionGatewayFactory::class)
        ->tag('payum.gateway_factory_builder', ['factory' => 'stripe_checkout_session']);

    $services->set('flux_se.payum_stripe_js.gateway_factory_builder', GatewayFactoryBuilder::class)
        ->arg('$gatewayFactoryClass', StripeJsGatewayFactory::class)
        ->tag('payum.gateway_factory_builder', ['factory' => 'stripe_js']);
};

