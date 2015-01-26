<?php namespace Zaweb\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePhotosTable extends Migration
{

    public function up()
    {
        Schema::create('zaweb_gallery_photos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('description');

            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('zaweb_gallery_categories');

            $table->integer('attachment_id')->unsigned()->index();
            $table->foreign('attachment_id')->references('id')->on('zaweb_gallery_attachments');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zaweb_gallery_photos');
    }

}
