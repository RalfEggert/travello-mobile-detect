<?php
/**
 * Zend Framework 2/3 module to provide view helper for mobile detect lib
 *
 * @package    TravelloMobileDetect
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-mobile-detect
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace TravelloMobileDetect\View\Helper;

use Mobile_Detect;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class MobileDetectFactory
 *
 * Generates the MobileDetect view helper object
 *
 * @package TravelloMobileDetect\View\Helper
 */
class MobileDetectFactory implements FactoryInterface
{
    /**
     * Create Service Factory
     *
     * @param ServiceLocatorInterface $viewHelperManager
     *
     * @return MobileDetect
     */
    public function createService(
        ServiceLocatorInterface $viewHelperManager
    ) {
        $mobileDetect = new Mobile_Detect();

        $helper = new MobileDetect($mobileDetect);

        return $helper;
    }
}
