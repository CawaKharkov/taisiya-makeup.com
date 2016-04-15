<?php

namespace App\Repositories\Admin;

use App\Models\Admin\StaticPage;
use InfyOm\Generator\Common\BaseRepository;

class StaticPageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return StaticPage::class;
    }
}
