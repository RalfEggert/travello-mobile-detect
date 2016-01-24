<?php
/**
 * Zend Framework MVC module to provide view helper for mobile detect lib
 *
 * @package    TravelloMobileDetect
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-mobile-detect-mvc
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace TravelloMobileDetect;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * TravelloMobileDetect module class
 *
 * @package    TravelloMobileDetect
 */
class Module implements ConfigProviderInterface
{
    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
