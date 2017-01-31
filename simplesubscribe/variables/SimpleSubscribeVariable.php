<?php
namespace Craft;

/**
 * OFFICIAL DOCUMENTATION:
 * https://craftcms.com/docs/plugins/variables
 */

class SimpleSubscribeVariable
{

    // Check if access cookie is set
    public function findSubmissions($params = false)
    {
        return craft()->simpleSubscribe->findSubmissions($params);
    }

}
