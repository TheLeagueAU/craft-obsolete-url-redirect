<?php
namespace Craft;

class ObsoleteRedirectPlugin extends BasePlugin
{

    function getName()
    {
        return Craft::t('Obsolete URL Redirect');
    }

    function getVersion()
    {
        return '0.1.1';
    }

    function getDeveloper()
    {
        return 'Michael LaCroix, The League Agency';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/TheLeagueAU/craft-obsolete-url-redirect';
    }

    function hasCpSection()
    {
        return false;
    }

}
