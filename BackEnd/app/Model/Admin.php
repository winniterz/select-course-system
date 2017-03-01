<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * 不可被批量赋值的属性。
     *
     * @var array
     */
    protected $guarded = ['created_at','updated_at'];


    public function institute()
    {
        return $this->belongsTo('App\Model\Institute');
    }

}