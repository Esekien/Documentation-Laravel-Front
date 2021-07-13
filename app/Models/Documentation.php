<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documentation extends Model
{
	use SearchableTrait, SoftDeletes;
	
    protected $guarded = [];
    protected $searchable = [
        'columns' => [
            'name' => 10,
        ],
    ];
    protected $fillable = [
        'id','title','information','version_id'
    ];
    /**
     * Relationships
     */
    public function version(){
        return $this->belongsTo(Version::class);
    }

}
