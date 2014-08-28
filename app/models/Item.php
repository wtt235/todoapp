<?php

use \Carbon\Carbon;

class Item extends Eloquent{

    protected $guarded = array('id');

    public function user()
    {
        return $this->hasOne('User');
    }

    public function tags()
    {
        return $this->hasMany('Tag');
    }

    public function getFormattedDueDate()
    {
        $date = Carbon::createFromFormat('Y-m-d',$this->due);
        return $date->format('M d, Y');
    }

    public function getShortFormattedDueDate()
    {
        $date = Carbon::createFromFormat('Y-m-d',$this->due);
        return $date->format('m/d/Y');
    }

    public function setFromFormattedDate($fDate)
    {
        $date = strtotime($fDate);
        $this->due =  date('Y-m-d', $date);
    }
}