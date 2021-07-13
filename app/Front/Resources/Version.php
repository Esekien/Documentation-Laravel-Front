<?php

namespace App\Front\Resources;

use WeblaborMx\Front\Inputs\ID;
use WeblaborMx\Front\Inputs\Text;
use App\Models\Version as Model;
use App\Front\Resources\Resource;

class Version extends Resource
{
    public $base_url = '/admin/versions';
    public $model = Model::class;
    public $title = 'name';

    public function fields()
    {
        return [
            ID::make(),
            Text::make('Name'),
            
        ];
    }
}
