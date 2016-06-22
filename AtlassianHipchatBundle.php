<?php

namespace Atlassian\HipchatBundle;

use Atlassian\HipchatBundle\DependencyInjection\CompilerPass\ClientCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Pierre Rolland <roll.pierre@gmail.com>
 */
class AtlassianHipchatBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ClientCompilerPass());
    }
}
