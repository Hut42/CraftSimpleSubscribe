<?php
namespace Craft;

/**
 * OFFICIAL DOCUMENTATION:
 * https://craftcms.com/docs/plugins/services
 */

class SimpleSubscribeService extends BaseApplicationComponent
{
	public function addEmail($email)
	{            
            try{
                $record = new SimpleSubscribeRecord();

                if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // matches email regex
                    $record->email = $email;
                    if($record->validate() && $record->save())
                        return true;
                }
                
                return false;
            }
            catch(Exception $e){
                return false;
            }
	}
        
        public function findSubmissions($params){
            return new SimpleSubscribeRecord($params ?: array());
        }

}
