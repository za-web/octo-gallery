<?php

namespace Zaweb\Gallery\Components;

use Cms\Classes\ComponentBase;

class Photo extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Photo Component',
            'description' => 'Photos',
        ];
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'Description' => 'Photo description',
                'default' => '',
                'type' => 'string',
                'placeholder' => 'Image description'
            ]
        ];
    }


}