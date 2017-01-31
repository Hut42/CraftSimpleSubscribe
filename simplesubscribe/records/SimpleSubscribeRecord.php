<?php
namespace Craft;

class SimpleSubscribeRecord extends BaseRecord
{
    public function getTableName()
    {
        return 'subscribers_stored';
    }

    protected function defineAttributes()
    {
        return array(
            'email' => array(AttributeType::String, 'required' => true, 'label' => 'Your Email'),
        );
    }
    
    public function defineIndexes()
    {
        return array(
            array('columns' => array('email'), 'unique' => true),
        );
    }
    
    /**
     * Create a new instance of the current class. This allows us to
     * properly unit test our service layer.
     *
     * @return BaseRecord
     */
    public function create()
    {
        $class = get_class($this);
        $record = new $class();
        return $record;
    }
}