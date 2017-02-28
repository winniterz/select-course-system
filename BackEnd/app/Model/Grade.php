<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grade';

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
    public function student()
    {
        return $this->hasMany('App\Model\Student');
    }
    public function schedule()
    {
        return $this->hasMany('App\Model\Scheule');
    }
    public function course()
    {
        return $this->hasMany('App\Model\Course');
    }
    public function institute()
    {
        return $this->belongsTo('App\Model\Institute');
    }
}
