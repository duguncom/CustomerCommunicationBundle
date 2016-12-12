<?php

namespace Dugun\Bundle\CustomerCommunicationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 *
 * @author Farhad Safarov <farhad.safarov@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('dugun_customer_communication');

        $rootNode
            ->children()
                ->arrayNode('intercom')
                    ->children()
                        ->scalarNode('appId')->end()
                        ->scalarNode('apiKey')->end()
                        ->scalarNode('accessToken')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
