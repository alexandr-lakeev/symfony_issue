<?php

namespace App\Vendor\SecondBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('vendor_second');

        $rootNode->
            children()
                ->integerNode('some_param')
                    ->isRequired()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
