<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 8/27/14
 * Time: 3:16 PM
 */

class ItemModelTest extends TestCase {

    public function testgetShortFormattedDueDate(){
        $item = new Item;
        $date = date('Y-m-d',1409170929);
        $item->due = $date;
        $actual = $item->getShortFormattedDueDate();
        $excpected = '08/27/2014';
        $this->assertEquals($excpected, $actual);
    }

    public function testgetFormattedDueDate(){
        $item = new Item;
        $date = date('Y-m-d',1409170929);
        $item->due = $date;
        $actual = $item->getFormattedDueDate();
        $excpected = 'Aug 27, 2014';
        $this->assertEquals($excpected, $actual);
    }
} 