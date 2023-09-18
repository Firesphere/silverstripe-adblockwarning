<?php

namespace Firesphere\AdblockWarning\Extensions;

use PageController;
use SilverStripe\Core\Extension;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\View\Requirements;
use SilverStripe\View\SSViewer;

/**
 * @mixin PageController owner
 */
class PageControllerExtension extends Extension
{
    protected static $enabled = true;
    protected $adblockWarning = '';
    public function onAfterInit()
    {
        if (self::$enabled) {
            Requirements::css('firesphere/adblockwarning:dist/css/nativeads.js.css');
            $this->adblockWarning = SSViewer::execute_template('Firesphere\\Includes\\AdblockWarning', []);
        }
    }

    public function AdblockWarning()
    {
        return $this->adblockWarning;
    }

    public static function setEnabled(bool $enabled): void
    {
        self::$enabled = $enabled;
    }
}