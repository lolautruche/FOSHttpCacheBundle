<?php

/*
 * This file is part of the FOSHttpCacheBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\HttpCacheBundle;

use FOS\HttpCacheBundle\DependencyInjection\Compiler\LoggerPass;
use FOS\HttpCacheBundle\DependencyInjection\Compiler\TagListenerPass;
use FOS\HttpCacheBundle\DependencyInjection\Compiler\UserContextListenerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FOSHttpCacheBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new LoggerPass());
        $container->addCompilerPass(new TagListenerPass());
        $container->addCompilerPass(new UserContextListenerPass());
    }
}
