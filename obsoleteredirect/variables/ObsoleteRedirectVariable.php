<?php
namespace Craft;

class ObsoleteRedirectVariable
{

    /**
     * Redirect to an obsolete URL, if one exists
     */
    public function check($prefixToStrip = '')
    {
        if (craft()->request->isSiteRequest()) {
            $path = craft()->request->getSegments();
            $entry = craft()->obsoleteRedirect->locateEntry($path);

            if ($entry) {
              $url = $entry->url;
              if (!empty($prefixToStrip)) {
                // Strip domain and prefix
                $url = preg_replace("#http[s]?://.*?/$prefixToStrip/#", '/', $entry->url);
              }

              craft()->request->redirect($url);
            }
        }
    }

}
