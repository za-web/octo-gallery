<?php namespace Zaweb\Gallery\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
/**
 * Photos Back-end Controller
 */
class Photos extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Zaweb.Gallery', 'gallery', 'photos');
        $this->addCss("/plugins/zaweb/gallery/assets/upload/css/style.css");
        $this->addJs("/plugins/zaweb/gallery/assets/upload/js/jquery.iframe-transport.js");
        $this->addJs("/plugins/zaweb/gallery/assets/upload/js/jquery.ui.widget.js");
        $this->addJs("/plugins/zaweb/gallery/assets/upload/js/jquery.knob.js");
        $this->addJs("/plugins/zaweb/gallery/assets/upload/js/jquery.fileupload.js");
        $this->addJs("/plugins/zaweb/gallery/assets/handlebars-v2.0.0.js");

        $this->addJs("/plugins/zaweb/gallery/assets/upload/js/script.js");
    }
    
    /**
     * Delete photo action
     *
     * @return void
     */
    public function onDelete()
    {
        $photos = post("photos");
        \Zaweb\Gallery\Models\Photos::whereIn('id', $photos)
                ->delete();

        \Flash::success('Notes Successfully deleted.');

        return $this->listRefresh();
    }
}