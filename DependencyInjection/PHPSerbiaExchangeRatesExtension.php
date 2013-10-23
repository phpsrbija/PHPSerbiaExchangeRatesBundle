<?php

/*
 * This file is part of the PHPSerbiaExchangeRatesBundle package.
 *
 * (c) PHPSerbia <http://phpsrbija.rs>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPSerbia\Bundle\ExchangeRatesBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * PHPSerbia exchange rates DI extension.
 *
 * @author Zarko Stankovic <stankovic.zarko@gmail.com>
 */
class PHPSerbiaExchangeRatesExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config/'));
        $loader->load('converters.xml');
    }
}