<?php

namespace Atlassian\HipchatBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 *
 * @author Pierre Rolland <roll.pierre@gmail.com>
 */
class AtlassianHipchatExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('atlassian_hipchat.group', $config['group']);
        $container->setParameter('atlassian_hipchat.rooms', $config['rooms']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('clients.yml');
        $loader->load('client_description.yml');
        $loader->load('managers.yml');
    }
}
