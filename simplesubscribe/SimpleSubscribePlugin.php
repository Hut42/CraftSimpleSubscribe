<?php
namespace Craft;

class SimpleSubscribePlugin extends BasePlugin
{

	public function getName()
	{
		return 'Simple Subscribe';
	}

	public function getDescription()
	{
		return 'Take an email address from the users of the site and store them';
	}

	public function getDocumentationUrl()
	{
		return 'https://github.com/Hut42/CraftSimpleSubscribe';
	}

	public function getVersion()
	{
		return '0.0.1';
	}

	public function getSchemaVersion()
	{
		return '0.0.1';
	}

	public function getDeveloper()
	{
		return 'Hut42';
	}

	public function getDeveloperUrl()
	{
		return 'http://hut42.co.uk/';
	}
        
        public function hasCpSection()
        {
                return true;
        }

}
