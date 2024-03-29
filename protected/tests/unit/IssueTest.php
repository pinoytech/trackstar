<?php

class IssueTest extends CDbTestCase {

    public $fixtures=array (
        'issues'=>'Issue'
    );

    public function testGetTypes()
    {
        $options = Issue::model()->typeOptions;
        $this->assertTrue(is_array($options));
        $this->assertTrue(3 == count($options));
        $this->assertTrue(in_array('Bug', $options));
        $this->assertTrue(in_array('Feature', $options));
        $this->assertTrue(in_array('Task', $options));
    }
}