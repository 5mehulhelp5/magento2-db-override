<?php
/**
 * Amadeco DbOverride module
 *
 * @category  Amadeco
 * @package   Amadeco_DbOverride
 * @copyright Ilan Parmentier
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Amadeco_DbOverride', __DIR__);