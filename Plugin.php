<?php

namespace Zaweb\Gallery;


class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Gallery Plugin',
            'description' => 'Simple gallery plugin',
            'author' => 'ZaWeb',
            'icon' => 'icon-flickr'
        ];
    }

    public function registerComponents()
    {
        return [
            'Zaweb\Gallery\Components\Photo' => 'Photo'
        ];
    }

    public function registerNavigation()
    {
        return [
            'gallery' => [
                'label' => 'zaweb.gallery::lang.gallery.menu_label',
                'icon' => 'icon-flickr',
                'url' => \Backend::url('zaweb/gallery/photos'),
                'permissions' => ['zaweb.gallery.*'],
                'order' => 500,

                'sideMenu' => [
                    'photos' => [
                        'url' => \Backend::url('zaweb/gallery/photos'),
                        'label' => 'zaweb.gallery::lang.gallery.menu_label',
                    ],
                    'categories' => [
                        'url' => \Backend::url('zaweb/gallery/categories'),
                        'label' => 'zaweb.gallery::lang.gallery.side_menu.categories_label'
                    ]
                ]
            ]
        ];
    }


}