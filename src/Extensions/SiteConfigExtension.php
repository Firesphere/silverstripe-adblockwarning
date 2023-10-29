<?php

namespace Firesphere\AdblockWarning\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\FieldType\DBHTMLText;
use SilverStripe\ORM\FieldType\DBVarchar;

/**
 * class Firesphere\AdblockWarning\Extensions\SiteConfigExtension
 *
 * @mixin SiteConfig
 *
 * @package Firesphere\NoAdblockWarning
 */
class SiteConfigExtension extends DataExtension
{
    private static $db = [
        'AdblockHeading' => DBVarchar::class,
        'AdblockContent' => DBHTMLText::class
    ];

    private static $defaults = [
        'AdblockHeading' => 'No adblocker detected!',
        'AdblockContent' => 'It seems you are not using an ad blocker.<br/>
                Consider installing one, e.g. <a href="https://ublockorigin.com/" target="_blank">uBlock origin</a>.<br />
                for improved privacy and no more invasive ads.'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.AdblockNotification', [
            TextField::create('AdblockHeading', 'Heading'),
            HTMLEditorField::create('AdblockContent', 'Adblock message content')
        ]);
        parent::updateCMSFields($fields);
    }

}