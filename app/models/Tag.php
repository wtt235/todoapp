<?php

class Tag extends Eloquent
{

    protected $guarded = array('id');

    public function item()
    {
        return $this->hasOne('Item');
    }
} 