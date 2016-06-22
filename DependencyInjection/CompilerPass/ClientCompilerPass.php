<?php

namespace Atlassian\HipchatBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Compiler pass that will add our definition to the Guzzle hipchat client.
 *
 * @author Pierre Rolland <roll.pierre@gmail.com>
 */
class ClientCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $descriptions = $container->getParameter('guzzle_client_factory.descriptions');
        $descriptions['hipchat'] = $container->getParameter('atlassian_hipchat.client.description');
        $descriptions['hipchat']['baseUrl'] = sprintf(
            'https://%s.hipchat.com',
            $container->getParameter('atlassian_hipchat.group')
        );
        $container->setParameter('guzzle_client_factory.descriptions', $descriptions);
    }
}
