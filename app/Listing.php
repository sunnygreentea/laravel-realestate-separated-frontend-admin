<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\City;
use App\Transaction;
use App\Propertytype;

class Listing extends Model
{
    use SoftDeletes;
    
    public $table = 'listings';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'user_id',
        'transaction_id',
        'ptype_id',
        'city_id',
        'price',
        'per',
        'beds',
        'baths',
        'garage',
        'area',
        'amenties',
        'description',
        'lat',
        'lng'
    ];

    public function city()
    {
        return $this->belongsTo('App\City', 'city_id');
    }

    public function transaction()
    {
        return $this->belongsTo('App\transaction', 'transaction_id');
    }

    public function ptype()
    {
        return $this->belongsTo('App\Propertytype', 'ptype_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
