<?php

declare(strict_types=1);

namespace Prometee\PayumStripeCheckoutSessionBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public const CONFIG_ROOT_NAME = 'prometee_payum_stripe_session_checkout';

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(self::CONFIG_ROOT_NAME);
        $rootNode = $treeBuilder->getRootNode();

        $this->addGlobalSection($rootNode);

        return $treeBuilder;
    }

    /**
     * @param ArrayNodeDefinition $node
     */
    protected function addGlobalSection(ArrayNodeDefinition $node)
    {
    }
}
