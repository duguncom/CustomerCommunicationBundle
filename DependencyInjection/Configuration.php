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
                        ->scalarNode('appId')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('apiKey')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
