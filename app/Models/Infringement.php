<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Infringement extends Model
{
    use HasFactory;
    public $translatable = ['Name'];

    protected $fillable=['item','Points_Rebate','Notes'];
    protected $table = 'infringement_item';
    public $timestamps = true;

}
