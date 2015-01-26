<?php

use Illuminate\Support\Facades\Input;

Route::group(['prefix' => '/admin/zaweb/gallery/', 'before' => 'authenticate'], function(){
    Route::post('photos/upload', function(){

        $model = new Zaweb\Gallery\Models\Attachment;

        $file = new System\Models\File;
        $file->data = Input::file('upl');
        $file->save();

        $model->photo()->add($file);
        $model->path = $model->photo->getPath();
        $model->save();

        return [
            'path'=>$model->photo->getPath(),
            'attachment_id' => $model->id,
        ];
    });
});