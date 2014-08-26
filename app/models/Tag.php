<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 8/25/14
 * Time: 5:00 PM
 */

class Tag extends Eloquent{

    protected $guarded = array('id');

    public function item()
    {
        return $this->hasOne('Item');
    }
} 