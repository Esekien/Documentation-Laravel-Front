<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Version extends Model
{
	use SearchableTrait, SoftDeletes;
	
    protected $guarded = [];
    protected $searchable = [
        'columns' => [
            'name' => 10,
        ],
    ];
    protected $fillable = [
        'id','name',
    ];

    /**
     * Relationships
     */
    public function documentation(){
        return $this->hasMany(Documentation::class);
    }


}
