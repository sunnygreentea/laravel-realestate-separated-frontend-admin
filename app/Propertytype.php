<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Listing;

class Propertytype extends Model
{
    public $table = 'propertytypes';

	protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function listings()
    {
        return $this->hasMany('App\Listing', 'ptype_id', 'id');
    }
}
