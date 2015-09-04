<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Component;

/**
 * Provides ability to statically register modules
 *
 * @author Josh Di Fabio <joshdifabio@gmail.com>
 */
class ModuleRegistrar extends AbstractComponentRegistrar
{
    /**
     * This instance
     *
     * @var ModuleRegistrar
     */
    private static $instance;

    /**
     * returns an instance of module registrar
     *
     * @return ModuleRegistrar
     */
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new ModuleRegistrar();
        }
        return static::$instance;
    }
}
