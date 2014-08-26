<?php

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
}