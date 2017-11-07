<?php

namespace App\Models;

trait ModelTrait
{

    public static function getTableName()
    {
        return ((new static)->getTable());
    }

    public static function getFieldKeyName()
    {
        return ((new static)->getKeyName());
    }

}