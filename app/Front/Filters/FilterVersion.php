<?php

namespace App\Front\Filters;

use WeblaborMx\Front\Inputs\Select;
use WeblaborMx\Front\Inputs\Text;

use App\Models\Version;

class FilterVersion extends Filter
{
    public $slug = 'Version';
    //default filter
    public $default = '1';

    public function apply($query, $value)
    {
        return $query->where('version_id', $value);
    }

    public function field()
    {
        
        //query
        
        $version = Version::pluck('name','id');

        return Select::make('Version')->options(
            $version,
        )->rules('required');
    }
}