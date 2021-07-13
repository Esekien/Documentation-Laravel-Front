<?php

namespace App\Front\Resources;

use App\Front\Filters\FilterVersion;
use WeblaborMx\Front\Inputs\ID;
use WeblaborMx\Front\Inputs\Text;
use WeblaborMx\Front\Inputs\Trix;
use WeblaborMx\Front\Inputs\BelongsTo;
use WeblaborMx\Front\Inputs\HasMany;
use App\Models\Documentation as Model;
use App\Front\Resources\Resource;

class Documentation extends Resource
{
    public $base_url = '/admin/documentations';
    public $model = Model::class;
    public $title = 'id';

    public function fields()
    {
        return [
            ID::make(),
            Text::make('Title'),
            Trix::make('Information'),
            BelongsTo::make('Version')->rules('required')->default(1),
        ];
    }
    
    public function filters()
    {
        return [
            new FilterVersion,
        ];
    }
    
}
