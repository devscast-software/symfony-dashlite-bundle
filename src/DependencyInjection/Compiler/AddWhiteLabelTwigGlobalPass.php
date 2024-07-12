<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class AddWhiteLabelTwigGlobalPass.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
class AddWhiteLabelTwigGlobalPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if ($container->hasDefinition('twig') === false) {
            return;
        }

        $definition = $container->getDefinition('twig');
        $definition->addMethodCall('addGlobal', ['devscast_dashlite', new Reference('devscast_dashlite.whitelabel')]);
    }
}
