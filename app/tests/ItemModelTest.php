<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 8/27/14
 * Time: 3:16 PM
 */

class ItemModelTest extends TestCase
{
    /**
     * test converting MySQL date to short date string
     */
    public function testgetShortFormattedDueDate()
    {
        $item = new Item;
        $date = date('Y-m-d',1409170929);
        $item->due = $date;
        $actual = $item->getShortFormattedDueDate();
        $expected = '08/27/2014';
        $this->assertEquals($expected, $actual);
    }

    /**
     * test for exception if no date set in item
     * @expectedException InvalidArgumentException
     */
    public function testgetShortFormattedDueDateFromEmpty()
    {
        $item = new Item;
        $actual = $item->getShortFormattedDueDate();
    }

    /**
     * test converting MySQL date to short date (with abbreviated month) string
     */
    public function testgetFormattedDueDate()
    {
        $item = new Item;
        $date = date('Y-m-d',1409170929);
        $item->due = $date;
        $actual = $item->getFormattedDueDate();
        $expected = 'Aug 27, 2014';
        $this->assertEquals($expected, $actual);
    }

    /**
     * test converting short date string to MySQL date format
     */
    public function testsetFromFormattedDate()
    {
        $date = 'Aug 27, 2014';
        $item = new Item;
        $item->setFromFormattedDate($date);
        $expected = '2014-08-27';
        $actual = $item->due;
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for exception if no date provided
     * @expectedException InvalidArgumentException
     */
    public function testsetFromEmpty()
    {
        $date = null;
        $item = new Item;
        $item->setFromFormattedDate($date);
        $expected = '1970-01-01';
        $actual = $item->due;
    }
} 