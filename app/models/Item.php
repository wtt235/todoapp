<?php

use \Carbon\Carbon;

class Item extends Eloquent
{
    protected $guarded = array('id');

    public function user()
    {
        return $this->hasOne('User');
    }

    public function tags()
    {
        return $this->hasMany('Tag');
    }

    /**
     * @return string
     * get due date as MM d, YYYY (ex: Aug 1, 2014)
     */
    public function getFormattedDueDate()
    {
        $date = Carbon::createFromFormat('Y-m-d', $this->due);
        return $date->format('M d, Y');
    }

    /**
     * @return string
     * get due date as m/d/yyyy format (ex: 08/01/2014)
     */
    public function getShortFormattedDueDate()
    {
        $date = Carbon::createFromFormat('Y-m-d', $this->due);
        return $date->format('m/d/Y');

    }

    /**
     * @param $date
     * Take formatted date and set due date to mysql formated date
     */
    public function setFromFormattedDate($date)
    {
        if(empty($date))
        {
            throw new InvalidArgumentException('date must be provided');
        }
        $date = strtotime($date);
        $this->due =  date('Y-m-d', $date);
    }
}