<?php
namespace Craft;

/**
 * OFFICIAL DOCUMENTATION:
 * https://craftcms.com/docs/plugins/controllers
 */
class SimpleSubscribeController extends BaseController
{
	 protected $allowAnonymous = true;

         public function actionSubscribe(){
             $this->requirePostRequest(); // must be a post request
             
             $email = craft()->request->getPost('email');
             
             craft()->simpleSubscribe->addEmail($email);
         }
         
}
