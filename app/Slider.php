<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primaryKey = 'idSlider';
    protected $fillable = ['page', 'alt', 'img', 'msgSpan', 'msgH2', 'msgP', 'link'];
    protected $table = "Slider";
}
