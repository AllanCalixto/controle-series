<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 12/01/2020
 * Time: 01:36
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;

    protected $fillable = ['nome'];
}