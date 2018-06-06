<?php

namespace App\Vendor\FirstBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('vendor_first');

        $rootNode->
            children()
                ->integerNode('some_param')
                    ->isRequired()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
