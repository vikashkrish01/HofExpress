<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 9/6/2018
 * Time: 12:51 PM
 */
namespace App\Traits;

use Webpatser\Uuid\Uuid;
trait Uuids
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}